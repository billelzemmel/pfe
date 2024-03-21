
import axios from 'axios';
import Swal from 'sweetalert2'

export default {
  data() {
    return {
      isSidebarOpen: true,
      Candidats: [],
      selectedMoniteur: null,
      moniteurs:[],
      selectedMoniteurId: null,
      selectedCandidat :null
    };
  },
  mounted() {
    this.fetchCandidats();
    this.fetchMoniteurs();
    $('.block-check input[type="checkbox"]').click(function () {
        $(this).closest('.inner-scroll').find('.block-check input[type="checkbox"]').not(this).prop('checked', false);
      });
  },
  methods: {
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
     


    async deleteStudent(candidatsId) {
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
        await axios.delete(`/api/users/${candidatsId}`);
        this.Candidats = this.Candidats.filter(candidat => candidat.id !== candidatsId);
        console.log(`Moniteur with ID ${candidatsId} deleted successfully.`);
      } catch (error) {
        console.error(`Error deleting moniteur with ID ${candidatsId}:`, error);
      }
    } else if (result.isDenied) {
      Swal.fire("Changes are not saved", "", "info");
    }
  });
},

    openMoniteurModal(moniteur) {
  this.selectedMoniteur = moniteur;
  $('#exampleModal').modal('show');
  console.log(this.selectedMoniteur); 
  console.log("selected",selectedMoniteur);
},

openMoniteurModals(Candidat) {
  this.selectedCandidat = Candidat;
  $('#myModal').modal('show');
  console.log(this.selectedCandidat); 
  console.log("selectedperson", this.selectedCandidat);
},

assignMoniteur() {
  console.log('selcrted mointeur',this.selectedMoniteurId);
  console.log("selectedpersoaan",this.selectedCandidat);

  if (this.selectedMoniteurId) {
    this.$axios
      .put(`/api/affectMoniteur/${ this.selectedCandidat}`, {
        moniteur_id: this.selectedMoniteurId,
      })
      .then((response) => {
        console.log(response.data.message); 
        $('#myModal').modal('hide');
      })
      .catch((error) => {
        console.error(error.response.data);
      });
  } else {
    console.error('Please select a moniteur');
  }
},
  },
};
