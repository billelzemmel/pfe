<template>
    
  <main id="main" class="main">

<div class="pagetitle">
  <h1>Data Tables</h1>
  
</div><!-- End Page Title -->
     <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Exams</h5>
              
              <!-- Table with stripped rows -->
              <table class="table ">
                <thead>
                  <tr>
                    <th>
                        Reference
                    </th>
                    <th>Moniteur</th>
                    <th>Type</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Date</th>

                  </tr>
                </thead>
                <tbody>
                  <tr v-for="exam in Exams" :key="exam.id">
                    <td>#{{ exam.reference }}</td>
                    <td>{{ exam.moniteur.user.nom }} {{ exam.moniteur.user.prenom }}</td>
                    <td>{{ exam.types.type }}</td>
                    <td>{{ exam.date }}</td>
                   
                </tr>
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
    </main>


</template>
<style scoped src="./css/examtab.css"></style>
<script src="./services/exams.js"></script>
