import axios from 'axios';

export default {
  data() {
    return {
      USERInfo: "",
      userId: "" ,
      ecoleInfo:""
    };
  },
  mounted() {
    this.getUserInfo();
  },
  methods: {
    async getUserInfo() {
      try {
        this.userId = localStorage.getItem('userId');
        const response = await axios.get(`/api/administrateurs/${this.userId}`); 
        const autoecoleid=response.data.admins[0].autoecole_id;
        const autoecoleresponse= await axios.get(`/api/autoecoles/${autoecoleid}`);
        this.USERInfo = response.data.admins[0];
        this.ecoleInfo= autoecoleresponse.data.autoecole;
        console.log(this.USERInfo);
        console.log(this.ecoleInfo);

      } catch (error) {
        console.error('Error getting user info:', error);
      }
    },
  },
};
