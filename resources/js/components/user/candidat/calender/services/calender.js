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
          element.find('.fc-title').append('<br/><b>Moniteur nom:</b> ' + event.moniteur_name + ' '+ event.moniteur_prenom);
        },
       
        
        
        
      });
    } catch (error) {
      console.error('Error setting up FullCalendar:', error);
    }
  },
  methods: {
    async fetchEvents() {
      try {
        this.userId = localStorage.getItem('ConID');

        const response = await axios.get(`/api/seancesBycon/${this.userId}`);
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
