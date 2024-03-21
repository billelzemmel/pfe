<template>
   <body>
   <main id="main" class="main">
 
 <div class="pagetitlev3">
   <h1>Students List</h1>
 
   </div> 
   
   <br>
     <section class="section dashboard">
		<div class="card-container">

<div v-for="candidat in Candidats" :key="candidat.id">
     <div class="custom-ancards">

   <button class="custom-mails"  @click="deleteStudent(candidat.user.id)">
     <svg
	 @click="deleteStudent(candidat.user.id)"
       class="custom-lucides custom-lucide-mails"    
       xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"  viewBox="0 0 16 16">
     
     <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
     </svg>
   </button>
   <div class="custom-profile-pics">
     <img class="imggg" :src="candidat.user.image_url" />
   </div>
   <div class="custom-bottoms">
     <div class="custom-contents">
       <span class="custom-names">{{candidat.user.nom}}</span>
       <span class="custom-about-mes"
         >Lorem ipsum dolor sit amet consectetur adipisicinFcls
       </span>
     </div>
     <div class="custom-bottom-bottoms">
       <div class="custom-social-links-containers">
		<div v-if="candidat.moniteur !== null">
        <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16" @click="openMoniteurModal(candidat.moniteur)">
  				<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  			<path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
		</svg>
	</div>

	<div v-else>

				<svg  @click="openMoniteurModals(candidat.id)"  data-toggle="modal" data-target="#myModal" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-slash" viewBox="0 0 16 16">
 		 		<path d="M13.879 10.414a2.501 2.501 0 0 0-3.465 3.465zm.707.707-3.465 3.465a2.501 2.501 0 0 0 3.465-3.465m-4.56-1.096a3.5 3.5 0 1 1 4.949 4.95 3.5 3.5 0 0 1-4.95-4.95ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
				</svg>
			</div>

       			</div>
       <button class="custom-buttons">UPDATE INFO</button>
     			</div>
   			</div>
 			</div>
		</div>
</div>
 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Instructor Informations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close"></i></span>
        </button>
      </div>
      <div class="modal-body"v-if="selectedMoniteur">
        

            <div class="row g-0">

                <div class="col-md-8 border-right">

                    <div class="status p-3">

                        <table class="table table-borderless">
                          
                          <tbody>
                            <tr>
                           
                              <td>
                                  <div class="d-flex flex-column">

                                    <span class="heading d-block">vechule</span>
                                    <span class="subheadings">Cairo Hospital</span>
                                      

                                  </div>
                              </td>
                              <td>
                                   <div class="d-flex flex-column">

                                    <span class="heading d-block">Time/Date</span>
                                    <span class="subheadings">5:00PM 3-12-2020</span>
                                      

                                  </div>
                              </td>
                              <td>
                                  <div class="d-flex flex-column">

                                    <span class="heading d-block">Status</span>
                                    <span class="subheadings"><i class="dots"></i> Booked</span>
                                      

                                  </div>
                              </td>
                            </tr>
                            <br>
                            <tr>
                                <td colspan="4">
                                    <br>
                                <div class="d-flex flex-column">

                                   
                            </div>
                                </td>
                            </tr>
                            
                             
                          </tbody>
                        </table>

                       
                        
                    </div>


                    
                    
                </div>
                <div class="col-md-4">

                    <div class="p-2 text-center">

                        <div class="profile">

                            <img :src=selectedMoniteur.user.image_url width="100" class="rounded-circle img-thumbnail">

                            <span class="d-block mt-3 font-weight-bold"><span class="subheadings">{{ selectedMoniteur.user.nom }}</span></span>

                        </div>

                        <div class="about-doctor">

                            <table class="table table-borderless">
                          
                              <tbody>
                                 <tr>
                                    <td>
                                      <div class="d-flex flex-column">

                                        <span class="heading d-block">Education</span>
                                        <span class="subheadings">University of Harward</span>
                                          

                                      </div>
                                    </td>

                                    <td>
                                      <div class="d-flex flex-column">

                                        <span class="heading d-block">Language</span>
                                        <span class="subheadings">Spanish, English</span>
                                          

                                      </div>
                                    </td>
                                  </tr>


                                  <tr>
                                    <td>
                                      <div class="d-flex flex-column">

                                        <span class="heading d-block">Organisation</span>
                                        <span class="subheadings">Accupunture</span>
                                          

                                      </div>
                                    </td>

                                    <td>
                                      <div class="d-flex flex-column">

                                        <span class="heading d-block">Specialist</span>
                                        <span class="subheadings">Accupunture</span>
                                          

                                      </div>
                                    </td>
                                  </tr>
                              </tbody>
                           </table>
                            
                        </div>
                        
                    </div>
                    
                </div>
                


            </div>



      </div>
   
    </div>
  </div>
</div>









  <div class="modal fade" id="myModal">
      <div class="modal-dialog modal-lg">
    
        <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
      <h4 class="modal-title">ADD AN INSTRUCTOR</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
          
        </div>
        <div class="modal-body choice-modal" >
          <div class="container-fluid">
            <div class="row inner-scroll"  >

          <div class="col-md-2" v-for="moniteur in moniteurs" :key="moniteur.id">
            <div class="gallery-card">
            <div class="gallery-card-body">
              <label class="block-check">
            <img :src="moniteur.user.image_url"  class="img-responsive" />
            <input
                          type="radio"
                          :value="moniteur.id"
                          v-model="selectedMoniteurId"
                        />
                    <span class="checkmark"></span>
              </label>
              <div class="mycard-footer">
              <a href="#" class="card-link">{{moniteur.user.nom}}</a>
              </div>
            </div>
            </div>
          </div>
        </div>
        </div>
      </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" @click="assignMoniteur">Continue</button>
        </div>
      </div>

    </div>




 </section>
 </main>
</body> 
 </template>
<style scoped>

.card-container {
 display: flex;
 flex-wrap: wrap;
}
</style>
 <script src="./services/students.js"></script>

 <style scoped src="./css/student.css"></style>
 