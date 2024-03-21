
import axios from 'axios';
import Swal from 'sweetalert2'

export default {
  data() {
    return {
      isSidebarOpen: true,
      moniteurs: [],
      selectedVehicle: null,
    };
  },
  mounted() {
    this.fetchMoniteurs();
  },
  methods: {
    async fetchMoniteurs() {
      try {
        const response = await axios.get('/api/moniteurs');
        this.moniteurs = response.data.moniteurs;
        console.log(response.data.moniteurs);
        
      } catch (error) {
        console.error('Error fetching moniteurs:', error);
      }
    },
   


    async deleteMoniteur(moniteurId) {
  Swal.fire({
    title: "Do you want to delete the Instructor?",
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: "Save",
    denyButtonText: `Don't save`
  }).then(async (result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      Swal.fire("Saved!", "", "success");
      try {
        await axios.delete(`/api/users/${moniteurId}`);
        this.moniteurs = this.moniteurs.filter(moniteur => moniteur.id !== moniteurId);
        console.log(`Moniteur with ID ${moniteurId} deleted successfully.`);
      } catch (error) {
        console.error(`Error deleting moniteur with ID ${moniteurId}:`, error);
      }
    } else if (result.isDenied) {
      Swal.fire("Changes are not saved", "", "info");
    }
  });
},

     openVehicleModal(vehicle) {
  this.selectedVehicle = vehicle;
  $('#exampleModal').modal('show');
  console.log(this.selectedVehicle); 
},

  },
};
