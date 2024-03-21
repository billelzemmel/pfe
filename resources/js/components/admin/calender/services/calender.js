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
        selectable: true,
        selectHelper: true,
        select: async (start, allDay) => {
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
          console.log(event)
          const eventTitle = event.title;
          const moniteur_name = event.moniteur_name;
          const condidatname = event.candidat_name;
          const date_start = event.start;
          const date_end = new Date(event.end_date).toString();

          Swal.fire({
            title: "Do you want to delete the event? ",
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: "Info",
            denyButtonText: `Delete`,
          }).then(async (result) => {
            if (result.isConfirmed) {
              Swal.fire({
                title: "Event Info",
                html: `
                  <div>
                    <p>Event title: ${eventTitle}</p>
                    <p>Moniteur: ${moniteur_name}</p>
                    <p>Condidat: ${condidatname}</p>
                    <p>From: ${date_start}</p>
                    <p>To: ${date_end}</p>

                  </div>
                `,
                showClass: {
                  popup: `
                    animate__animated
                    animate__fadeInUp
                    animate__faster
                  `
                },
                hideClass: {
                  popup: `
                    animate__animated
                    animate__fadeOutDown
                    animate__faster
                  `
                }
              });
        
            
            } else if (result.isDenied) {
              const eventid = event.seance_id;
              console.log(eventid);
 
              try {
                const response = await axios.delete(`/api/seances/${eventid}`);

        
                console.log(response.data.message); 
        
                Swal.fire("Event deleted successfully!", "", "success");
                location.reload() ;
              } catch (error) {
                console.error('Error deleting seance:', error.message);
                Swal.fire("Error", "Failed to delete the event", "error");
              } 
              
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
        const response = await axios.get('/api/seances');
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
