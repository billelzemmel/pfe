import { createRouter, createWebHistory } from "vue-router";
import Home from '../components/Home.vue';
import Login from '../components/login.vue';
import DashboardADM from '../components/admin/dashboard.vue';
import vehicleComp from '../components/admin/vechule/vehicle.vue';
import AddvehicleComp from '../components/admin/vechule/addvehicle.vue';
import InstructorsComp from '../components/admin/instructors/instructors.vue';
import AddInstructorsComp from '../components/admin/instructors/addinstructors.vue';
import StudentsComp from '../components/admin/students/students.vue';
import AddstudentsComp from '../components/admin/students/addstudent.vue';
import DashHome from '../components/admin/DashHome.vue';
import ExamComp from '../components/admin/exams/exams.vue';
import SettingComp from '../components/admin/adminsetting/setting.vue';
import MoniteurDash from '../components/user/moniteur/dashboard.vue';
import MoniteurDashHome from '../components/user/moniteur/DashHome.vue';
import ExamaComp from '../components/user/moniteur/exams/exams.vue';
import callenderComp from'../components/admin/calender/calender.vue';
import SettingCompa from'../components/user/moniteur/adminsetting/setting.vue';
import ChatComp from '../components/user/chat.vue';
import CallendersComp from'../components/user/moniteur/calender/calender.vue';

const routes = [
  {
    path: '/home',
    component: Home,
  },
  {
    path: '/login',
    component: Login,
  },
  
  {
    path: '/moniteur',
    component: MoniteurDash,
    meta: { isAdmin: true },
    children: [
      {
        path: 'home',
        component: MoniteurDashHome,
      },
      {
        path: 'exams',
        component: ExamaComp,
      },
      {
        path: 'settings',
        component: SettingCompa,
      },
      {
        path: 'callender',
        component: CallendersComp,
      }
    ]
  },
  {
    path: '/dashboard',
    component: DashboardADM,
    meta: { isAdmin: true },
    children: [
      {
        path: 'home',
        component: DashHome,
      },
      {
        path: 'vehicle',
        component: vehicleComp,
      },
      {
        path: 'addvehicle',
        component: AddvehicleComp,
      },
      {
        path: 'instructors',
        component: InstructorsComp,
      },
      {
        path: 'addinstructors',
        component: AddInstructorsComp,
      },
      {
        path: 'students',
        component: StudentsComp,
      },
      {
        path: 'addstudent',
        component: AddstudentsComp,
      },
      {
        path: 'exams',
        component: ExamComp,
      },
      {
        path: 'settings',
        component: SettingComp,
      },
      {
        path: 'callender',
        component: callenderComp,
      }
    ],
  },
  
  {
    path: '/home/chat',
    component: ChatComp,
  },

  
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
