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
        this.userId = localStorage.getItem('ConID');
        const response = await axios.get(`/api/condidats/${this.userId}`); 
        this.USERInfo = response.data.condidat;
        console.log(this.USERInfo);

      } catch (error) {
        console.error('Error getting user info:', error);
      }
    },
  },
};
