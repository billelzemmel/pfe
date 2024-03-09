import { createRouter ,createWebHistory} from "vue-router";
import Home from '../components/Home.vue';
import Login from '../components/login.vue';
import DashboardADM from '../components/admin/dashboard.vue';
import vehicleComp from '../components/admin/vehicle.vue';
import AddvehicleComp from '../components/admin/addvehicle.vue';
import InstructorsComp from '../components/admin/instructors.vue';
import AddInstructorsComp from '../components/admin/addinstructors.vue';
import StudentsComp from '../components/admin/students.vue';
import AddstudentsComp from '../components/admin/addstudent.vue';

import ChatComp from '../components/user/chat.vue';

const routes = [
  
    {
      path: '/home',
      component: Home,
    }
    ,
    {
        path: '/login',
        component: Login,
    }
    ,
    {
      path: '/dashboard',
      component: DashboardADM,
    },
    {
      path: '/dashboard/vehicle',
      component: vehicleComp,
    },
    {
      path: '/dashboard/addvehicle',
      component: AddvehicleComp,
    }
    ,
    {
      path: '/dashboard/instructors',
      component: InstructorsComp,
    },
    ,
    {
      path: '/dashboard/addinstructors',
      component: AddInstructorsComp,
    },
    {
      path: '/dashboard/students',
      component: StudentsComp,
    },
    {
      path: '/dashboard/addstudent',
      component: AddstudentsComp,
    },
    
    {
      path: '/home/chat',
      component: ChatComp,
    },
  ];
const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router