
<style>
        /* Centered Message Box (Modal) Styles */
        .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Dim background */
        overflow:auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        text-align: center;
        width: 80%;
        max-width: 400px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .modal-content h3 {
        margin-top: 0;
    }

    .modal-buttons {
        margin-top: 20px;
        display: flex;
        justify-content: space-around;
    }

    .modal-buttons button {
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .confirm {
        background-color: #4CAF50;
        color: white;
    }

    .cancel {
        background-color: #f44336;
        color: white;
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
    // Show the modal
    function showModal() {
        document.getElementById('myModal').style.display = 'block';
    }

    // Close the modal
    function closeModal() {
        document.getElementById('myModal').style.display = 'none';
    }

    // Confirm and submit form
    function confirmSave() {
        document.getElementById('userForm').submit();
    }
</script>
