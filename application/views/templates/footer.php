      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; PEMDUSIV2 <?= date('Y'); ?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

      </div>
      <!-- End of Page Wrapper -->

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>

      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Pilih "Logout" untuk keluar</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Bootstrap core JavaScript-->
      <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
      <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

      <!-- JsSign -->
      <script src="<?= base_url('assets/'); ?>vendor/js-lib/jquery-ui.min.js" type="text/javascript"> </script>
      <script src="<?= base_url('assets/'); ?>vendor/js-lib/jquery.signature.js" type="text/javascript"></script>

      <script type="text/javascript" src="<?= base_url('assets/'); ?>vendor/js-lib/excanvas.js"></script>

      <script src="<?= base_url('assets/'); ?>js/jq-signature.min.js"></script>

      <!-- DataTable -->
      <script src="<?= base_url('assets/'); ?>js/jquery.dataTables.min.js"></script>
      <script src="<?= base_url('assets/'); ?>js/dataTables.bootstrap4.min.js"></script>
      <script src="<?= base_url('assets/'); ?>js/dataTables.buttons.min.js"></script>
      <script src="<?= base_url('assets/'); ?>js/buttons.bootstrap4.min.js"></script>
      <script src="<?= base_url('assets/'); ?>js/buttons.flash.min.js"></script>
      <script src="<?= base_url('assets/'); ?>js/jszip.min.js"></script>
      <script src="<?= base_url('assets/'); ?>js/pdfmake.min.js"></script>
      <script src="<?= base_url('assets/'); ?>js/vfs_fonts.js"></script>
      <script src="<?= base_url('assets/'); ?>js/buttons.html5.min.js"></script>
      <script src="<?= base_url('assets/'); ?>js/buttons.print.min.js"></script>

      <!-- CKeditor 4 -->
      <script src="<?= base_url('assets/'); ?>vendor/ckeditor/ckeditor.js"></script>
      <script src="<?= base_url('assets/'); ?>js/sweetalert2.js"></script>

      <!-- Datetime -->
      <script src="<?= base_url('assets/'); ?>js/timer.js"></script>
      <script src="<?= base_url('assets/'); ?>vendor/datetime/js/moment.min.js"></script>
      <script src="<?= base_url('assets/'); ?>vendor/datetime/js/bootstrap-datetimepicker.min.js"></script>
      <script type="text/javascript">
        $(function() {
          $('#mulai').datetimepicker();
          $('#berakhir').datetimepicker();
        });
      </script>
      <?php if ($title == "Data Anggota") : ?>
        <script>
          $(document).ready(function() {
            $("#anggota").DataTable({
              dom: "Bfrtip",
              buttons: ["excel", "pdf", "print"],
              "paging": false,
              "info": false
            });
          });
        </script>
      <?php endif; ?>
      <?php if ($title == "Data Pendaftar" || $title == "Pendaftaran") : ?>
        <script>
          $(document).ready(function() {
            $("#pendaftar").DataTable({
              dom: "Bfrtip",
              buttons: ["excel", "pdf", "print"],
              "paging": false,
              "info": false
            });
          });
        </script>
      <?php endif; ?>


      <?php if ($title == "Absen") : ?>
        <script>
          $(document).ready(function() {
            $('#tandatanganv2').jqSignature();
            $('#res').on("click", function() {
              $('#tandatanganv2').jqSignature('clearCanvas')
            });
          })
          // $(document).ready(function() {
          //   $('#tandatangan').signature({
          //     guideline: false
          //   });

          //   $('#del').on("click", function() {
          //     $('#tandatangan').signature('clear');
          //     $('#bbk').signature('enable').signature('clear').signature('disable');
          //   });

          //   $('#json').on("click", function() {
          //     var pesan = $('#tandatangan').signature('toJSON');
          //     alert(pesan);
          //   });

          //   $('#draw').on("click", function() {
          //     var json = $('#tandatangan').signature('toJSON');
          //     $('#bbk').signature('enable').
          //     signature('draw', json).signature('disable')
          //   });
          //   $('#bbk').signature({
          //     disable: true
          //   });
          //   $('#mm').on("click", function() {
          //     var json = $('#tandatangan').signature('toJSON');
          //     $('#joj').val(json);
          //   });

          // });
          $(document).ready(function() {
            // jika terjadi event submit pada form
            $('#absensi').submit(function(e) {
              // mencegah agar halaman tidak pindah halaman / refresh
              e.preventDefault()
              // ambil data
              // var data = $(this).serialize()
              // ambil method dari method di form
              const method = $(this).attr('method')
              // ke mana data akan dikirim
              // diambil dari action di form
              const action = $(this).attr('action')
              const json = $('#tandatanganv2').jqSignature('getDataURL');
              const nama = $('#nama').val()
              const kelas = $('#kelas').val()
              const divisi = $('#divisi').val()
              // memulai kirim ajax
              $.ajax({
                url: action,
                data: {
                  json: json,
                  kelas: kelas,
                  divisi: divisi,
                  nama: nama
                },
                type: 'post',
                beforeSend: function() {
                  Swal.fire(
                    'Absen Berhasil',
                    'Hari ini : <?= date("d/m/Y") ?>',
                    'success'
                  )
                },
                success: function(data) {

                  console.log(data);
                  // document.location.href = action;
                }
              })
            })
          })
        </script>
      <?php endif; ?>



      <script>
        $('.custom-file-input').on('change', function() {
          let filename = $(this).val().split('\\').pop();
          $(this).next('.custom-file-label').addClass("selected").html(filename);
        });


        $('.form-check-input').on('click', function() {
          const menuId = $(this).data('menu');
          const roleId = $(this).data('role');

          $.ajax({
            url: "<?= base_url('admin/changeaccess'); ?>",
            type: 'post',
            data: {
              menuId: menuId,
              roleId: roleId
            },
            success: function() {
              document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
            }
          });


        });
      </script>


      <script>
        $(function() {
          CKEDITOR.replace('isipost', {
            height: 300,
            filebrowserUploadUrl: '<?php echo base_url('admin/upeditor/') . $rand; ?>'
          })

        });

        function cekPro() {
          let getPro = document.getElementById('kategori').value;
          if (getPro == "2") {
            let nem = `<div class="from-group row mb-3" id="kem"><label for="kementrian" class="col-sm-2 col-form-label">Kementrian</label>
                                        <div class="col-sm-4">
                                            <select name="kementrian" id="kementrian" class="form-control">
                                              <option class="text-center">PILIH KEMENTRIAN</option>
                                              <?php foreach ($kem as $k) : ?>
                                              <option value="<?= $k["id"]; ?>" class="text-center"><?= $k["nama"]; ?></option>
                                              <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <a class="btn btn-secondary text-white" id="tamkem"> <strong>+</strong> </a></div>`
            $('#newpro').append(nem)

            let dataRow = 0
            const tamkem = document.getElementById('tamkem')
            tamkem.addEventListener('click', function() {

              if (dataRow < 2) {
                dataRow++
                inputRow(dataRow)
              }

            })
            inputRow = (i) => {
              let ppDiv = `<div class="from-group row mb-3" id="newpro${i}"><label for="kementrian" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-4">
                                            <select name="kementrian${i}" id="kementrian${i}" class="form-control">
                                              <option class="text-center">PILIH KEMENTRIAN</option>
                                              <?php foreach ($kem as $k) : ?>
                                              <option value="<?= $k["id"]; ?>" class="text-center"><?= $k["nama"]; ?></option>
                                              <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <a class="btn btn-secondary text-white delete-record" data-id="${i}"> <strong>x</strong> </a></div>`
              $('#newpro').append(ppDiv)

            }
            $('#newpro').on('click', '.delete-record', function() {
              let id = $(this).attr('data-id')
              $('#newpro' + id).remove()
              dataRow--
            })
          } else {
            const kem = document.getElementById('kem')
            kem.remove()
          }
        }
      </script>
      <strong></strong>
      </body>

      </html>