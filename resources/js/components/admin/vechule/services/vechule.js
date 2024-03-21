
import axios from 'axios';
import Swal from 'sweetalert2'

export default {
  data() {
    return {
      isSidebarOpen: true,
      vehicules: [],
      selectedVehicle: null,
    };
  },
  mounted() {
    this.fetchVechules();
  },
  methods: {
    async fetchVechules() {
      try {
        const response = await axios.get('/api/vehicules');
        this.vehicules = response.data.vehicules;
        console.log(response.data.vehicules);
        
      } catch (error) {
        console.error('Error fetching moniteurs:', error);
      }
    },
    async fetchMoniteurNameById(moniteurId) {
        try {
          const response = await axios.get(`/moniteurs/${moniteurId}`);
          const moniteurNom = response.data.moniteur_nom;
          console.log('Moniteur Name:', moniteurNom);
          return moniteurNom;
        } catch (error) {
          console.error('Error fetching moniteur name:', error);
          // Handle error
          return null;
        }
      },


    async deletevehicules(vechuleId) {
  Swal.fire({
    title: "Do you want to delete the vechule?",
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: "Save",
    denyButtonText: `Don't save`
  }).then(async (result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      Swal.fire("Saved!", "", "success");
      try {
        await axios.delete(`/api/vehicules/${vechuleId}`);
        this.vehicules = this.vehicules.filter(vechule => vechule.id !== vechuleId);
        console.log(`vehicule with ID ${vechuleId} deleted successfully.`);
      } catch (error) {
        console.error(`Error deleting vehicule with ID ${vechuleId}:`, error);
      }
    } else if (result.isDenied) {
      Swal.fire("Changes are not saved", "", "info");
    }
  });
},
  },
};
