import axios from 'axios';

export default {
  data() {
    return {
      Candidats: [],
      userId: "" ,
      vechules:[],
      Exams:[]

    };
  },
  mounted() {
    this.fetchCandidats();
    this.fetchVechules();
    this.fetchExams();
  },
  methods: {
    async fetchCandidats() {
      try {
        this.userId = localStorage.getItem('MonID');

        const response = await axios.get(`/api/candidatsByMon/${this.userId}`); 
        this.Candidats = response.data.candidats;
        console.log(this.Candidats);
        
      } catch (error) {
        console.error('Error fetching Candidats:', error);
      }
    },
    async fetchVechules() {
        try {
          this.userId = localStorage.getItem('MonID');
  
          const response = await axios.get(`/api/vehiculesbymoni/${this.userId}`); 
          this.vechules = response.data.vehicles;
          console.log(this.vechules);
          
        } catch (error) {
          console.error('Error fetching vechules:', error);
        }
      },
      async fetchExams() {
        try {
            this.userId = localStorage.getItem('MonID');
          const response = await axios.get(`/api/examsbyMon/${this.userId}`);
          this.Exams = response.data.exams;
          console.log(response.data.exams);
          
        } catch (error) {
          console.error('Error fetching exams:', error);
        }
      },
}
}