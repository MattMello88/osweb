      <header>
        <div class="bg-info text-white shadow" id="myTab" role="tablist">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <ul class="nav nav-pills col-12 col-lg-auto justify-content-center text-small">
                <li>
                  <a href="{{ url('dashboard/chamados') }}"

                    @if ($view === "chamados")
                      class="nav-link active"
                    @else
                      class="nav-link"
                    @endif
                  >
                    Chamados
                  </a>
                </li>
                <li>
                  <a href="{{ url('dashboard/tramites') }}"
                    @if ($view === "tramites")
                      class="nav-link active"
                    @else
                      class="nav-link"
                    @endif
                  >
                    Tramites
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </header>
