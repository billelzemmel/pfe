
import axios from 'axios';
import Swal from 'sweetalert2'

export default {
  data() {
    return {
      Exams: [],
    };
  },
  mounted() {
    this.fetchExams();

  },
  methods: {
    async fetchExams() {
      try {
        this.userId = localStorage.getItem('ConID');
        const response = await axios.get(`/api/examsbyCon/${this.userId}`);
        this.Exams = response.data.exams;
        console.log(response.data.exams);
        
      } catch (error) {
        console.error('Error fetching Candidats:', error);
      }
    },
  
} 
};
