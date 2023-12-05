import { createWebHistory, createRouter } from "vue-router"

import Teacher from "../Pages/Teachers.vue"
import Student from "../Pages/Students.vue"
import Even from "../Pages/Even.vue"
import Login from "../Pages/Login.vue"
import Register from "../Pages/Register.vue"

export const rontes= [
  {
    name: "teacher",
    path: "/teacher",
    component:Teacher
  },
  {
    name: "student",
    path: "/student",
    component:Student
  },
  {
    name: "even",
    path: "/even",
    component:Even
  },
  {
    name: "login",
    path: "/login",
    component:Login
  },
  {
    name: "register",
    path: "/register",
    component:Register
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes: rontes,
  // code ເມື່ອເຮົາຄຼິກໄປໜ້າທີ່ມີເນື້ອຫາຍາວ ເພື່ອເຮັດໃຫ້ກັບໄປຢູ່ເທິ່ງສຸດ
  scrollBehavior(){
    window.scrollTo(0,0)
  }
})

export default router