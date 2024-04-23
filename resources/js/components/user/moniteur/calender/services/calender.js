import axios from 'axios';
import moment from 'moment'; // Import moment for date formatting
import Swal from 'sweetalert2';

export default {
  data() {
    return {
      Candidats: [],
      moniteurs: [],
     /*  evenements: [] // Initialize events array */
    };
  },
  async mounted() {
    await this.fetchCandidats(); 
    await this.fetchMoniteurs(); 
    await this.fetchEvents(); 

    try {
      $('#calendar').fullCalendar({
        editable: true,
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        
        events: this.evenements, 
        eventTextColor: 'white',
        eventColor:'#717ff5',
        selectable: false,
        selectHelper: false,
        eventRender: function(event, element) {
          console.log(event);
          element.find('.fc-title').append('<br/><b>Condidiat nom:</b> ' + event.candidat_name + ' ' + event.candidat_prenom);
        },
        select: async (start, end, allDay) => {
          $('#seancemodal').modal('toggle');
          $('#saveBtn').click(async () => { 
            var title = $('#title').val();
            var candidatId = $('#candidat').val();
            var moniteurId = $('#moniteur').val();
            var start_time = $('#start_time').val();
            var start_date = moment(start).format('YYYY-MM-DD');
            var end_day = $('#end_day').val();
            var end_time = $('#end_time').val();
            var dateTimeEnd = `${end_day}T${end_time}`;
            var dateTimeStart = `${start_date}T${start_time}`;
            const formData = new FormData();
            formData.append('title', title);
            formData.append('start_date', dateTimeStart);
            formData.append('end_date', dateTimeEnd);
            formData.append('moniteur_id', moniteurId);
            formData.append('condidat_id', candidatId); 
            try {
              const response = await axios.post('/api/seances', formData, {
                headers: {
                  'Content-Type': 'multipart/form-data',
                },
              });
              console.log(formData);
              console.log(response, 'response');
            } catch (error) {
              alert('Error: ' + error.message);
              console.error('Adding seances failed', error);
            }
          });
        },
        eventClick: async (event, jsEvent, view) => {
          Swal.fire({
            title: "Do you want to delete the event?",
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: "Delete",
            denyButtonText: `Cancel`,
          }).then(async (result) => {
            if (result.isConfirmed) {
              const eventTitle = event.title;
              const eventstartdate = event.start.format();
              const eventend = event.end.format(); 
        
              try {
                const response = await axios.delete('/api/seances', {
                  data: {
                    title: eventTitle,
                    start_date: eventstartdate,
                    end_date: eventend,
                  },
                });
        
                console.log(response.data.message); 
        
                Swal.fire("Event deleted successfully!", "", "success");
                location.reload() ;
              } catch (error) {
                console.error('Error deleting seance:', error.message);
                Swal.fire("Error", "Failed to delete the event", "error");
              }
            } else if (result.isDenied) {
              Swal.fire("Canceled", "Event deletion canceled", "info");
            }
          });
        }
        
        
      });
    } catch (error) {
      console.error('Error setting up FullCalendar:', error);
    }
  },
  methods: {
    async fetchEvents() {
      try {
        this.userId = localStorage.getItem('MonID');

        const response = await axios.get(`/api/seancesBymon/${this.userId}`);
        this.evenements = response.data.seances;
        console.log('Fetched Events:', this.evenements);
        return this.evenements;
      } catch (error) {
        console.error('Error fetching events:', error);
      }
    },
    async fetchCandidats() {
      try {
        const response = await axios.get('/api/candidats');
        this.Candidats = response.data.candidats;
        console.log('Fetched Candidats:', this.Candidats);
      } catch (error) {
        console.error('Error fetching Candidats:', error);
      }
    },
    async fetchMoniteurs() {
      try {
        const response = await axios.get('/api/moniteurs');
        this.moniteurs = response.data.moniteurs;
        console.log('Fetched Moniteurs:', this.moniteurs);
      } catch (error) {
        console.error('Error fetching moniteurs:', error);
      }
    },
  }
};
