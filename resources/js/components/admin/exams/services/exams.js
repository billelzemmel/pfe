
import axios from 'axios';
import Swal from 'sweetalert2'

export default {
  data() {
    return {
      Exams: [],
      Candidats:[],
      moniteurs:[],
      TYPES:[],
      reference: '',
      date: '',
      typeId: '', 
      moniteurId: '',
      candidatId:'',
      DATEtime:''
    };
  },
  mounted() {
    this.fetchExams();
    this.fetchCandidats();
    this.fetchMoniteurs();
    this.fetchTtpes();

  },
  methods: {
    async fetchExams() {
      try {
        const response = await axios.get('/api/exams');
        this.Exams = response.data.exams;
        console.log(response.data.exams);
        
      } catch (error) {
        console.error('Error fetching Candidats:', error);
      }
    },
    async fetchCandidats() {
        try {
          const response = await axios.get('/api/candidats');
          this.Candidats = response.data.candidats;
          console.log(this.Candidats);
          
        } catch (error) {
          console.error('Error fetching Candidats:', error);
        }
      },
        async fetchMoniteurs() {
          try {
            const response = await axios.get('/api/moniteurs');
            this.moniteurs = response.data.moniteurs;
             console.log(response.data.moniteurs);
             
          } catch (error) {
            console.error('Error fetching moniteurs:', error);
          }
        },
        async fetchTtpes() {
            try {
              const response = await axios.get('/api/types');
              this.TYPES = response.data.types;
              console.log("types",response.data.types);
              
            } catch (error) {
              console.error('Error fetching Candidats:', error);
            }
          },


          async AddExam() {
            const formData = new FormData();
            formData.append('reference', this.reference);
            formData.append('condidat_id', this.candidatId);
            formData.append('moniteur_id', this.moniteurId);
            formData.append('type_id', this.typeId);
            
            const dateTime = new Date(`${this.date}T${this.time}`);
            const formattedDateTime = dateTime.toISOString().slice(0, 19).replace('T', ' ');
            formData.append('date', formattedDateTime);
            
            try {
                const response = await axios.post('/api/exams', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                    },
                });
                location.reload();

                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: response.data.message,
                    
                });
            } catch (error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: error.response.data.message || 'An error occurred while adding the hh.',
                });
            }
        }
        

} 
};
