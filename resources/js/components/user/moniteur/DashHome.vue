<template>


    <main id="main" class="main">
  
      <div class="pagetitle">
        <h1>Home</h1>
       
      </div><!-- End Page Title -->
  
      <section class="section dashboard">
        <div class="row">
    <div class="col-lg-4">
      <h1 class="text">Student List</h1>
      <br>
      <div class="d-flex justify-content-center"v-for="candidat in Candidats" :key="candidat.id"> 

      <div class="card" >
   <img class="card-image" :src="candidat.user.image_url" />
    
    <div class="category"> {{candidat.user.nom}} {{ candidat.user.prenom }} </div>
    <div class="heading"> A candidats added by the admin of the auto ecole
        <div class="author"> By <span class="name">Admin</span> {{ candidat.user.created_at}}</div>
    </div>
    </div>
</div>
</div>

    <div class="col-lg-4">
      <h1 class="text">Vechule List</h1>
      <br>
      <div class="d-flex justify-content-center" v-for="vehicle in vechules" :key="vehicle.id"> 

      <div class="card">
        <img class="card-image" :src="vehicle.image" />
    <div class="category"> {{vehicle.nom}} </div>
    <div class="heading"> A vechule de type {{ vehicle.type }} Added by admin
        <div class="author"> Matricule <span class="name">{{vehicle.matricule}}</span> </div>
    </div>
</div>
</div>
    </div>

    <!-- Exams Card -->
    <div class="col-lg-4">
      <h1 class="text">Exam List</h1>
      <br>
      <div class="d-flex justify-content-center"> 

      <div class="card">
          

            <div class="card-body">
              <h5 class="card-title"> Exams <span>| ALL</span></h5>

              <div class="activity" v-for="exam in Exams" :key="exam.id">

                <div class="activity-item d-flex">
                  <div class="activite-label">{{ exam.date }}</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    <span  class="fw-bold text-dark">{{exam.condidiat.user.nom}} {{exam.condidiat.user.prenom}}</span>
                     {{ exam.types.type }}  {{ exam.reference }}
                  </div>
                </div>

               

              </div>
</div>
            </div>
          </div>
      </div>
  </div>
      </section>
  
    </main>
  
    
  
  
  
  </template> 
 

<style scoped src="./css//Home.css"></style>
<script src="./services/dash.js"></script>
