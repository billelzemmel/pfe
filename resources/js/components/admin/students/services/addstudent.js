import Swal from 'sweetalert2';
import axios from 'axios';

export default {
  data() {
    return {
      nom: '',
      prenom: '',
      login: '',
      password: '',
      email: '',
      selectedFile: null,
    };
  },
  methods: {
    handleFileChange(event) {
      this.selectedFile = event.target.files[0];
    },
    async AddInst() {
      try {
        const formData = new FormData();
        formData.append('nom', this.nom);
        formData.append('prenom', this.prenom);
        formData.append('login', this.login);
        formData.append('password', this.password);
        formData.append('email', this.email);
        formData.append('type', 'condidat');
        formData.append('image', this.selectedFile);
        Swal.fire({
            position: "center",
            icon: "success",
            title: "User add",
            showConfirmButton: false,
            timer: 1500
          });      
        
        
        const response = await axios.post('/api/users', formData, {
          headers: {
            'Content-Type': 'multipart/form-data',
          },
        });

        console.log(formData);
        console.log(response, 'response');
        console.log(response.data);
      
        
        } catch (error) {
        alert('Error: ' + error.message);
        console.error('Adding instructor failed', error);
      }
    },
  },
};
