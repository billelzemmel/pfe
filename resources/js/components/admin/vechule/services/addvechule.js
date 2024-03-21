import Swal from 'sweetalert2';
import axios from 'axios';

export default {
  data() {
    return {
      nom: '',
      matricule: '',
      type: '', 
      moniteurId: '',
      disponible: new Boolean(true), 
      selectedFile: null,
      moniteurs: [],
    };
  },
  mounted() {
    this.fetchMoniteurs();
  },
  methods: {
    handleFileChange(event) {
      this.selectedFile = event.target.files[0];
    },
    async fetchMoniteurs() {
      try {
        const response = await axios.get('/api/moniteurs');
        this.moniteurs = response.data.moniteurs;
        console.log(response.data.moniteurs);
        console.log(this.moniteurs);
      } catch (error) {
        console.error('Error fetching moniteurs:', error);
      }
    },
    async AddVechule() {
      const formData = new FormData();
      formData.append('matricule', this.matricule);
      formData.append('nom', this.nom);
      formData.append('moniteur_id', this.moniteurId);
    
      const disponibleBoolean = this.moniteurId == ''; 
      formData.append('disponible', disponibleBoolean ? 1 : 0);
    
      formData.append('type', this.type);
      formData.append('image', this.selectedFile);
    
      console.log(this.moniteurId);
      localStorage.setItem("iddd", this.moniteurId);
      localStorage.setItem("type", this.type);
      localStorage.setItem("disponible", disponibleBoolean ? 1 : 0); 
    
      try {
        const response = await axios.post('/api/vehicules', formData, {
          headers: {
            'Content-Type': 'multipart/form-data',
          },
        });
        Swal.fire({
          icon: 'success',
          title: 'Success',
          text: response.data.message,
        });
    
      } catch (error) {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: error.response.data.message || 'An error occurred while adding the vehicle.',
        });
      }
    }
    
    
    
    
  }
}
