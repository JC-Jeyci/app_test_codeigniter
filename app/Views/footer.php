<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; APP Test <?php echo date('Y') ?></div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="<?php echo base_url(); ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>js/scripts.js"></script>
<script src="<?php echo base_url(); ?>js/simple-datatables.min.js"></script>
<script src="<?php echo base_url(); ?>js/datatables-simple-demo.js"></script>

<script>
    var modalEliminar = document.getElementById('modal-confirma')
    modalEliminar.addEventListener('show.bs.modal', function(event) {

        var buttonEliminar = document.getElementById('btn-ok');
        console.log(buttonEliminar);
        buttonEliminar.setAttribute('href', event.relatedTarget.getAttribute('data-href'));

    })
</script>

</body>

</html>