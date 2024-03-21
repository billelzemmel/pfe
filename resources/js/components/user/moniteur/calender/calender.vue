<template>
<br />
<main id="main" class="main">

  <h2>Calender list</h2>
  <br />
  <section class="section">
    <div class="modal fade" id="seancemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add events</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">title:</label>
            <input type="text" class="form-control" id="title"v-model="reference">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Candidat:</label>
            <select v-model="candidatId" id="candidat" class="form-control" >
              <option disabled value="">Select Candidat</option>
              <option v-for="candidat in Candidats" :key="candidat.id" :value="candidat.id" >{{ candidat.user.nom }} {{ candidat.user.prenom }}</option>
            </select>    
                  </div>
       
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Moniteur:</label>
            <select v-model="moniteurId" class="form-control"  id="moniteur" >
              <option disabled value="">Select Moniteur</option>
              <option v-for="moniteur in moniteurs" :key="moniteur.id" :value="moniteur.id">{{ moniteur.user.nom }} {{ moniteur.user.prenom }}</option>
            </select>        
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">start time:</label>
            <div class="dateTime">
            <input type="time" class="form-control" id="start_time" v-model="time">
        </div>
        </div>
        <div class="mb-3">
            <label for="message-text" class="col-form-label">end time:</label>
            <div class="dateTime">
                <input type="date" class="form-control" id="end_day"  required v-model="date">
                <input type="time" class="form-control" id="end_time"  required v-model="time">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"   id="saveBtn">Ajouter</button>
      </div>        
    </form>
    </div>
      
    </div>
  </div>
</div>
  <div class="container">
   <div id="calendar">



   </div>
   
    </div>
  </section>
</main>

</template>
<script src="./services/calender.js"></script>
<style >
.fc-prev-button, .fc-next-button, .fc-today-button {
    color: #090909;
  padding: 0.7em 1.7em;
  font-size: 18px;
  border-radius: 0.5em;
  background: #e8e8e8;
  cursor: pointer;
  border: 1px solid #e8e8e8;
  transition: all 0.3s;
  box-shadow: 6px 6px 12px #c5c5c5, -6px -6px 12px #ffffff;
}

.fc-month-button, .fc-agendaWeek-button, .fc-agendaDay-button {
    color: #090909;
  padding: 0.7em 5em;
  font-size: 18px;
  border-radius: 0.5em;
  background: #e8e8e8;
  cursor: pointer;
  border: 1px solid #e8e8e8;
  transition: all 0.3s;
  box-shadow: 6px 6px 12px #c5c5c5, -6px -6px 12px #ffffff;
  margin-left: 12px;
}

.fc .fc-button-group > *{
    float :left;
    margin: 0 0 0 14px;
}
</style>
