<div class="accordion" id="dashboard">
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-dash">
            <a href="{{ route('dashboard') }}" class="btn d-flex align-items-center">
                <i class="bi bi-house-door ms-2 me-2"></i>
                <span style="color:black; font-weight: 500;">Dashboard</span>
            </a>
        </h2>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo" aria-expanded="true" aria-controls="flush-collapseTwo">
                <i class="bi bi-person-circle me-2"></i>
                <span style="color:black; font-weight: 500;">Student</span>
            </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body p-0 py-3">
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{ route('addStud') }}" class="nav-link">Add New Student</a></li>
                    <li class="list-group-item"><a href="{{ route('listStud') }}" class="nav-link">List Students</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree" aria-expanded="true"
                aria-controls="flush-collapseThree">
                <i class="bi bi-person-fill me-2"></i>
                <span style="color:black; font-weight: 500;">Teacher</span>
            </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree">
            <div class="accordion-body">
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{ route('addTeacher') }}" class="nav-link">Add New Teacher</a>
                    </li>
                    <li class="list-group-item"><a href="{{ route('listTeacher') }}" class="nav-link">List Teachers</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading4">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                <i class="bi bi-card-list me-2"></i>
                <span style="color:black; font-weight: 500;">Exanchange Programs</span>
            </button>
        </h2>
        <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{route('addExchangeTeacher')}}" class="nav-link">Add New Exanchange Teacher</a></li>
                    <li class="list-group-item"><a href="{{route('listExchangeTeacher')}}" class="nav-link">List Exanchange Teachers</a></li>
                    <li class="list-group-item"><a href="{{route('addExchangeStudent')}}" class="nav-link">Add New Exanchange Student</a></li>
                    <li class="list-group-item"><a href="{{route('listExchangeStudent')}}" class="nav-link">List Exanchange Students</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading5">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                <i class="bi bi-pc-display me-2"></i>
                <span style="color:black; font-weight: 500;">Workshops</span>
            </button>
        </h2>
        <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <ul class="list-group">
                    <li class="list-group-item"><a href="" class="nav-link">Add New Workshops</a>
                    </li>
                    <li class="list-group-item"><a href="" class="nav-link">List Workshops</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading6">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                <i class="bi bi-kanban-fill me-2"></i>
                <span style="color:black; font-weight: 500;">Research Project</span>
            </button>
        </h2>
        <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{ route('addResearchProject') }}"class="nav-link">Add New Research Project</a>
                    </li>
                    <li class="list-group-item"><a href="{{ route('listResearchProject') }}" class="nav-link">List Research Project</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading7">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                <i class="bi bi-cast me-2"></i>
                <span style="color:black; font-weight: 500;">Fab Lab</span>
            </button>
        </h2>
        <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{ route('addFabLab') }}" class="nav-link">Add New Fab Lab</a>
                    </li>
                    <li class="list-group-item"><a href="{{ route('listFabLab') }}" class="nav-link">List Fab Lab</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading8">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
                <i class="bi bi-card-checklist me-2"></i>
                <span style="color:black; font-weight: 500;">Programs</span>
            </button>
        </h2>
        <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{ route('addCulturalProg') }}" class="nav-link">Add Cultural Programs</a>
                    </li>
                    <li class="list-group-item"><a href="{{ route('addAcademicProg') }}" class="nav-link">Add Academic Programs</a>
                    </li>
                    <li class="list-group-item"><a href="{{ route('listAcademicPrograms') }}" class="nav-link">List Academic Programs</a>
                    </li>
                    <li class="list-group-item"><a href="{{ route('listCulturalPrograms') }}" class="nav-link">List Cultural Programs</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading5">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse5">
                <i class="bi bi-globe me-2"></i>
                <span style="color:black; font-weight: 500;">Internships</span>
            </button>
        </h2>
        <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading5"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{ route('addInternship') }}" class="nav-link">Add New Internship</a>
                    </li>
                    <li class="list-group-item"><a href="{{ route('listInternship') }}" class="nav-link">List Internship</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading5">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapse5">
                <i class="bi bi-briefcase me-2"></i>
                <span style="color:black; font-weight: 500;">Partner</span>
            </button>
        </h2>
        <div id="flush-collapse10" class="accordion-collapse collapse" aria-labelledby="flush-heading5"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{ route('addPartner') }}" class="nav-link">Add New Partner</a>
                    </li>
                    <li class="list-group-item"><a href="{{ route('listPartner') }}" class="nav-link">List Partner</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
