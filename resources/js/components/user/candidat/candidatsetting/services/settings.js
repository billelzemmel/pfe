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
        const response = await axios.get(`/api/moniteurs/${this.userId}`); 
        this.USERInfo = response.data.moniteur;
        console.log(this.USERInfo);

      } catch (error) {
        console.error('Error getting user info:', error);
      }
    },
  },
};
