@extends('layouts.app')

@section('content')
  <section class="bg-alpha text-dark pb-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header text-center">Contacts</div>
            <div class="card-body">
              <div class="row mb-3">
                <label for="responded" class="col-md-4 col-form-label text-md-end">Responded</label>
                <div class="col-md-6">
                  <select id="responded" name="responded" class="form-select">
                    <option value="">No</option>
                    <option value="Y">Yes</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="row mb-0">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button onclick="contacts_list();" class="btn btn-primary me-md-2">Buscar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-alpha text-dark pb-5">
    <div id="table-contacts" class="container">
      <div class="table-responsive">
        <table class="table table-hover table-dark">
          <thead>
            <tr class="table-dark">
              <th class="text-center">Name</th>
              <th class="text-center">E-mail</th>
              <th class="text-center">Phone</th>
              <th class="text-center">Company</th>
              <th class="text-center">Messege</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class="bg-secondary">
              <td class="text-center" colspan="6">Select the parameters to search</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <script type="text/javascript">

    $(document).ready(function(){

      $(document).on('click', '.pagination a', function(event) {

        event.preventDefault();
        let page = $(this).attr('href').split('page=')[1];
        contacts_list(page);
      });
    });

    function contacts_list(page) {

      let responded = document.getElementById("responded").value;

      $.ajax({

        type:'get',
        url:'/contacts/contactList',
        datatype:'json',
        data:{  'responded':responded,
                'page':page
        },
        success:function(data) {

          $('#table-contacts').html(data);

        },
        error:function() {

          alert('error');
        }
      });
    }

  </script>
@endsection