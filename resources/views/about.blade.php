<x-layouts.app>
    <h1>Acerca de nosotros</h1>

    {{-- <div class="container py-4">
        <div class="">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer"></div>
                </div>
                

            </div>

        </div>

    </div> --}}

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet consequuntur placeat ipsa quibusdam libero at dolores? Dolor eius ex expedita laboriosam, unde sint, saepe molestiae exercitationem nihil quis obcaecati ratione.</span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success">Save changes</button>
        </div>
      </div>
    </div>
  </div>

</x-layouts.app>
