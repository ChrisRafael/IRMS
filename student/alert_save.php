
<style>
    /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%;
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-button {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 400px;
  height: 240px;
  border-radius: 10px;
}
.confirm {
        background-color: #4CAF50;
        color: white;
}
/* The Close Button */
.cancel {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.cancel:hover,
.cancel:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.message {
    padding:10px;
    font-size: 20px;
    margin-bottom: 20px;
}

</style>
<!-- Modal Box HTML -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <h3>Are you sure you want to save?</h3>
        <div class="modal-buttons">
            <button class="confirm" onclick="confirmSave()">Yes</button>
            <button class="cancel" onclick="closeModal()">Cancel</button>
        </div>
    </div>
</div>


<script>
    //save 
    function del() {
        document.getElementById("myModal").style.display = "block";
}

function exit() {
        document.getElementById("myModal").style.display = "none";
}

</script>
