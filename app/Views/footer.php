                <footer class="py-4 mt-auto" style="background: white">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; By - Nayarb uwu</div>
                            <div>
                                <a href="https://github.com/nayarbgaaa/" target="_blank" >GitHub</a>
                                &middot;
                                <a href="https://facebook.com" target="_blank" >Facebook</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>  

        <!-- RUSO DATATABLE SALVAVIDAS -->
        <script src="<?php echo base_url(); ?>/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!--RUSO BOOTSTRAP CDN ACTUAL-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(); ?>/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(); ?>/js/datatables-simple-demo.js"></script>

        <!--RUSO DATATABLE CDN ACTUAL-->
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        
        <!--MODAL SCRIPT CONFIRMACION DE ELIMINAR-->
        <script>
            $('#modal-confirma').on('show.bs.modal', function(e){
                $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            });
        </script>

        <!--DATATABLE-->
        <script>
            var tabla=document.querySelector("#example");

            var dataTable = new DataTable(tabla,{
                "language": {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"},
                    "aLengthMenu": [ [6, 12, 24, -1], [6, 12, 24, "Todo"] ],
                    "iDisplayLength" : 6, 
            });

            //Productos
            var productos=document.querySelector("#productos");

            var dataTable = new DataTable(productos,{
                "language": {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"},
                    "aLengthMenu": [ [3, 6, 12, -1], [3, 6, 12, "Todo"] ],
                    "iDisplayLength" : 3, 
            });

            // DataTables Salvavidas
            $(document).ready(function() {
                $('#dataTable').DataTable({
                    "language": {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"},
                    "order": [[ 1, "desc" ]],
                    "aLengthMenu": [ [6, 12, 24, -1], [6, 12, 24, "Todo"] ],
                    "iDisplayLength" : 6, 
                });
            });
        </script>
        
        
    </body>
</html>