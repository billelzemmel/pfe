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
        formData.append('type', 'moniteur');
        formData.append('image', this.selectedFile);

        const response = await axios.post('/api/users', formData, {
          headers: {
            'Content-Type': 'multipart/form-data',
          },
        });

        console.log(formData);
        console.log(response, 'response');
        console.log(response.data);

        const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger',
          },
          buttonsStyling: false,
        });
        
        swalWithBootstrapButtons
          .fire({
            title: 'user ADDED ',
            text: 'USER ADDED SUCCESFULLY',
            icon: 'success',
            showCancelButton: true,
            confirmButtonText: 'SEE USERS',
            cancelButtonText: 'ADD OTHERS',
          })
          .then((result) => {
            if (result.isConfirmed) {
              this.$router.push({ path: '/dashboard/instructors' });
            } else {
              this.$router.push({ path: '/dashboard/addinstructors' });
            }
          });
      } catch (error) {
        alert('Error: ' + error.message);
        console.error('Adding instructor failed', error);
      }
    },
  },
};
