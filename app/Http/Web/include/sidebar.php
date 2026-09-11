<aside id="sidebar" class="sidebar">

    <div class="sidebar-header">

        <span class="sidebar-title">
            <i class="bi bi-list"></i>
            <span class="sidebar-text">Menu</span>
        </span>

        <button
            type="button"
            id="sidebarToggle"
            class="btn btn-sm btn-dark"
            aria-label="Abrir ou fechar menu"
        >
            <i class="bi bi-chevron-left"></i>
        </button>

    </div>


    <nav class="sidebar-nav">

        <div class="sidebar-section">
            <span class="sidebar-text">CONSULTAS</span>
        </div>


        <a
            href="../consulta/frigobar/frigobar.php"
            class="sidebar-item"
            title="Frigobar"
        >
            <i class="bi bi-cup-hot"></i>
            <span class="sidebar-text">Frigobar</span>
        </a>


        <a
            href="../consulta/cliente/cliente.php"
            class="sidebar-item"
            title="Clientes"
        >
            <i class="bi bi-person"></i>
            <span class="sidebar-text">Clientes</span>
        </a>


        <a
            href="../consulta/acomodacao.php"
            class="sidebar-item"
            title="Acomodações"
        >
            <i class="bi bi-building"></i>
            <span class="sidebar-text">Acomodações</span>
        </a>


        <a
            href="../consulta/colaborador.php"
            class="sidebar-item"
            title="Colaboradores"
        >
            <i class="bi bi-people"></i>
            <span class="sidebar-text">Colaboradores</span>
        </a>


        <hr>


        <div class="sidebar-section">
            <span class="sidebar-text">CADASTROS</span>
        </div>


        <a
            href="../cadastrar/frigobar.php"
            class="sidebar-item"
            title="Frigobar"
        >
            <i class="bi bi-plus-circle"></i>
            <span class="sidebar-text">Frigobar</span>
        </a>


        <a
            href="../cadastrar/kit_frigobar.php"
            class="sidebar-item"
            title="Kit frigobar"
        >
            <i class="bi bi-box-seam"></i>
            <span class="sidebar-text">Kit frigobar</span>
        </a>


        <a
            href="../cadastrar/colaborador.php"
            class="sidebar-item"
            title="Colaborador"
        >
            <i class="bi bi-person-plus"></i>
            <span class="sidebar-text">Colaborador</span>
        </a>


        <hr>


        <div class="sidebar-section">
            <span class="sidebar-text">SISTEMA</span>
        </div>


        <a
            href="../include/relatorio.php"
            class="sidebar-item"
            title="Relatórios"
        >
            <i class="bi bi-file-earmark-bar-graph"></i>
            <span class="sidebar-text">Relatórios</span>
        </a>


        <a
            href="../include/deshbord.php"
            class="sidebar-item"
            title="Dashboard"
        >
            <i class="bi bi-speedometer2"></i>
            <span class="sidebar-text">Dashboard</span>
        </a>

    </nav>


    <style>

  
        .sidebar {

            width: 250px;

            height: 100%;

            min-height: calc(100vh - 56px);

            padding: 15px;

            background: rgba(33, 37, 41, 0.97);

            color: white;

            transition:
                width 0.25s ease;

            overflow: hidden;

        }


        .sidebar-header {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 10px;

            margin-bottom: 20px;

        }


        .sidebar-title {

            display: flex;

            align-items: center;

            gap: 10px;

            font-size: 20px;

            font-weight: 600;

            white-space: nowrap;

        }


        #sidebarToggle {

            flex-shrink: 0;

        }

        .sidebar-nav {

            display: flex;

            flex-direction: column;

            gap: 4px;

        }


        .sidebar-section {

            margin-top: 8px;

            margin-bottom: 5px;

            color: #6c757d;

            font-size: 11px;

            font-weight: bold;

            white-space: nowrap;

        }


        .sidebar-item {

            display: flex;

            align-items: center;

            gap: 12px;

            padding: 10px 12px;

            color: #adb5bd;

            text-decoration: none;

            border-radius: 7px;

            white-space: nowrap;

            transition:
                background 0.2s ease,
                color 0.2s ease;

        }


        .sidebar-item:hover {

            background: #343a40;

            color: white;

        }


        .sidebar-item i {

            width: 20px;

            min-width: 20px;

            text-align: center;

            font-size: 17px;

        }


        .sidebar hr {

            border-color: #495057;

            margin: 12px 0;

        }


        .sidebar.collapsed {

            width: 75px;

        }


        .sidebar.collapsed .sidebar-header {

            justify-content: center;

        }


        .sidebar.collapsed .sidebar-title {

            display: none;

        }


        .sidebar.collapsed .sidebar-text {

            display: none;

        }


        .sidebar.collapsed .sidebar-item {

            justify-content: center;

            padding-left: 0;

            padding-right: 0;

        }


        .sidebar.collapsed .sidebar-item i {

            margin: 0;

        }


        .sidebar.collapsed #sidebarToggle i {

            transform: rotate(180deg);

        }


        @media (max-width: 768px) {

            .sidebar {

                width: 100%;

                min-height: auto;

            }


            .sidebar.collapsed {

                width: 100%;

            }

        }

    </style>


    <script>

        const sidebar = document.getElementById('sidebar');

        const sidebarToggle =
            document.getElementById('sidebarToggle');


        sidebarToggle.addEventListener('click', function () {

            sidebar.classList.toggle('collapsed');

        });

    </script>

</aside>

