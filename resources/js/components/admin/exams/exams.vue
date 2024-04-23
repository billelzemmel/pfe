<template>
    
  <main id="main" class="main">

<div class="pagetitle">
  <h1>Data Tables</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Data</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
     <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <button class="button"   data-bs-toggle="modal" data-bs-target="#exampleModal" >
                 <svg class="svg-icon" width="24" viewBox="0 0 24 24" height="24" fill="none"><g stroke-width="2" stroke-linecap="round" stroke="#056dfa" fill-rule="evenodd" clip-rule="evenodd"><path d="m3 7h17c.5523 0 1 .44772 1 1v11c0 .5523-.4477 1-1 1h-16c-.55228 0-1-.4477-1-1z"></path><path d="m3 4.5c0-.27614.22386-.5.5-.5h6.29289c.13261 0 .25981.05268.35351.14645l2.8536 2.85355h-10z"></path></g></svg>
                 <span class="lable">Add Exams</span>
                </button>
              <!-- Table with stripped rows -->
              <table class="table ">
                <thead>
                  <tr>
                    <th>
                        Reference
                    </th>
                    <th>Candidat</th>
                    <th>Type</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Date</th>
                    <th>Moniteur</th>
                    <th>Actions</th>

                  </tr>
                </thead>
                <tbody>
                  <tr v-for="exam in Exams.data" :key="exam.id">
                    <td>#{{ exam.reference }}</td>
    <td>
        {{ exam.condidiat.user ? exam.condidiat.user.nom + ' ' + exam.condidiat.user.prenom : '' }}
    </td>
    <td>{{ exam.types.type }}</td>
    <td>{{ exam.date }}</td>
    <td>
        {{ exam.moniteur.user ? exam.moniteur.user.nom + ' ' + exam.moniteur.user.prenom : '' }}
    </td>
    <td>
        <i class="bi bi-eye view"></i>
        <i class="bi bi-pencil edit"></i>
        <i class="bi bi-trash3 clear"></i>
    </td>
</tr>

                  
                </tbody>
              </table>
              <Bootstrap4Pagination align="center" size="large"

              :data="Exams" @pagination-change-page="getResults" ></Bootstrap4Pagination>

              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
      
    </section>
    </main>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Exam</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Reference:</label>
            <input type="text" class="form-control" id="recipient-name"v-model="reference">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Candidat:</label>
            <select v-model="candidatId" class="form-control" >
              <option disabled value="">Select Candidat</option>
              <option v-for="candidat in Candidats" :key="candidat.id" :value="candidat.id">{{ candidat.user.nom }} {{ candidat.user.prenom }}</option>
            </select>    
                  </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Type:</label>
            <select v-model="typeId" class="form-control" >
              <option disabled value="">Select Type</option>
              <option v-for="types in TYPES" :key="types.id" :value="types.id">{{ types.type }}</option>
            </select> 
                  </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Moniteur:</label>
            <select v-model="moniteurId" class="form-control" >
              <option disabled value="">Select Moniteur</option>
              <option v-for="moniteur in moniteurs" :key="moniteur.id" :value="moniteur.id">{{ moniteur.user.nom }} {{ moniteur.user.prenom }}</option>
            </select>        
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Date:</label>
            <div class="dateTime">
           <input type="date" class="form-control" id="datetimepicker" v-model="date">
            <input type="time" class="form-control" id="datetimepicker" v-model="time">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"  @click="AddExam">Ajouter</button>
      </div>        
    </form>
    </div>

    </div>
  </div>
</div>
</template>
<style scoped src="./css/examtab.css"></style>
<script src="./services/exams.js"></script>

<style scoped>
    .TailwindPagination{
        margin-bottom: 0;
    }
</style>