@extends('adminlte::page')

@section('title', 'IdenMac')

@section('content_header')
    <h1 class="">Bienvenido/a</h1>
@stop

@section('content')
    <p class="text-3x bg-green-900">Este es el Panel de administracion de IdenMac</p>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <div class="grey-bg container-fluid">
        <section>
            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="card overflow-hidden">
                        <div class="card-content">
                            <div class="card-body cleartfix">
                                <a href="admin/posts">
                                    <div class="media align-items-stretch">
                                        <div class="media-body">
                                            <h4>Posts</h4>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="primary font-large-2 mr-2"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M25 41.6667H43.75M31.25 10.4167L37.5 16.6667M34.375 7.29167C35.2038 6.46287 36.3279 5.99725 37.5 5.99725C38.0804 5.99725 38.655 6.11157 39.1912 6.33366C39.7274 6.55576 40.2146 6.88129 40.625 7.29167C41.0354 7.70205 41.3609 8.18924 41.583 8.72543C41.8051 9.26162 41.9194 9.8363 41.9194 10.4167C41.9194 10.997 41.8051 11.5717 41.583 12.1079C41.3609 12.6441 41.0354 13.1313 40.625 13.5417L14.5833 39.5833L6.25 41.6667L8.33333 33.3333L34.375 7.29167Z" stroke="#3A4ADD" stroke-width="4.16667" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body cleartfix">
                                <a href="admin/users">
                                    <div class="media align-items-stretch">
                                        <div class="media-body">
                                            <h4>Roles y Permisos</h4>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="warning font-large-2 mr-2"><svg width="63" height="50" viewBox="0 0 63 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_107_10)">
                                                <path d="M9.375 21.875C12.8223 21.875 15.625 19.0723 15.625 15.625C15.625 12.1777 12.8223 9.375 9.375 9.375C5.92773 9.375 3.125 12.1777 3.125 15.625C3.125 19.0723 5.92773 21.875 9.375 21.875ZM53.125 21.875C56.5723 21.875 59.375 19.0723 59.375 15.625C59.375 12.1777 56.5723 9.375 53.125 9.375C49.6777 9.375 46.875 12.1777 46.875 15.625C46.875 19.0723 49.6777 21.875 53.125 21.875ZM56.25 25H50C48.2812 25 46.7285 25.6934 45.5957 26.8164C49.5312 28.9746 52.3242 32.8711 52.9297 37.5H59.375C61.1035 37.5 62.5 36.1035 62.5 34.375V31.25C62.5 27.8027 59.6973 25 56.25 25ZM31.25 25C37.2949 25 42.1875 20.1074 42.1875 14.0625C42.1875 8.01758 37.2949 3.125 31.25 3.125C25.2051 3.125 20.3125 8.01758 20.3125 14.0625C20.3125 20.1074 25.2051 25 31.25 25ZM38.75 28.125H37.9395C35.9082 29.1016 33.6523 29.6875 31.25 29.6875C28.8477 29.6875 26.6016 29.1016 24.5605 28.125H23.75C17.5391 28.125 12.5 33.1641 12.5 39.375V42.1875C12.5 44.7754 14.5996 46.875 17.1875 46.875H45.3125C47.9004 46.875 50 44.7754 50 42.1875V39.375C50 33.1641 44.9609 28.125 38.75 28.125ZM16.9043 26.8164C15.7715 25.6934 14.2188 25 12.5 25H6.25C2.80273 25 0 27.8027 0 31.25V34.375C0 36.1035 1.39648 37.5 3.125 37.5H9.56055C10.1758 32.8711 12.9688 28.9746 16.9043 26.8164Z" fill="#FFD600"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_107_10">
                                                <rect width="62.5" height="50" fill="white"/>
                                                </clipPath>
                                                </defs>
                                                </svg>
                                                </i>
                                        </div>
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body cleartfix">
                                <a href="admin/pets">
                                    <div class="media align-items-stretch">
                                        <div class="media-body">
                                            <h4>Mascotas</h4>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="danger font-large-2"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.37496 25.2604C7.91663 25.2604 6.68399 24.7569 5.67704 23.75C4.6701 22.743 4.16663 21.5104 4.16663 20.052C4.16663 18.5937 4.6701 17.3611 5.67704 16.3541C6.68399 15.3472 7.91663 14.8437 9.37496 14.8437C10.8333 14.8437 12.0659 15.3472 13.0729 16.3541C14.0798 17.3611 14.5833 18.5937 14.5833 20.052C14.5833 21.5104 14.0798 22.743 13.0729 23.75C12.0659 24.7569 10.8333 25.2604 9.37496 25.2604ZM18.75 16.927C17.2916 16.927 16.059 16.4236 15.052 15.4166C14.0451 14.4097 13.5416 13.177 13.5416 11.7187C13.5416 10.2604 14.0451 9.02774 15.052 8.02079C16.059 7.01385 17.2916 6.51038 18.75 6.51038C20.2083 6.51038 21.4409 7.01385 22.4479 8.02079C23.4548 9.02774 23.9583 10.2604 23.9583 11.7187C23.9583 13.177 23.4548 14.4097 22.4479 15.4166C21.4409 16.4236 20.2083 16.927 18.75 16.927ZM31.25 16.927C29.7916 16.927 28.559 16.4236 27.552 15.4166C26.5451 14.4097 26.0416 13.177 26.0416 11.7187C26.0416 10.2604 26.5451 9.02774 27.552 8.02079C28.559 7.01385 29.7916 6.51038 31.25 6.51038C32.7083 6.51038 33.9409 7.01385 34.9479 8.02079C35.9548 9.02774 36.4583 10.2604 36.4583 11.7187C36.4583 13.177 35.9548 14.4097 34.9479 15.4166C33.9409 16.4236 32.7083 16.927 31.25 16.927ZM40.625 25.2604C39.1666 25.2604 37.934 24.7569 36.927 23.75C35.9201 22.743 35.4166 21.5104 35.4166 20.052C35.4166 18.5937 35.9201 17.3611 36.927 16.3541C37.934 15.3472 39.1666 14.8437 40.625 14.8437C42.0833 14.8437 43.3159 15.3472 44.3229 16.3541C45.3298 17.3611 45.8333 18.5937 45.8333 20.052C45.8333 21.5104 45.3298 22.743 44.3229 23.75C43.3159 24.7569 42.0833 25.2604 40.625 25.2604ZM13.8541 46.0937C12.2916 46.0937 10.9805 45.4944 9.92079 44.2958C8.86107 43.0972 8.3319 41.6833 8.33329 40.0541C8.33329 38.2486 8.94996 36.6687 10.1833 35.3145C11.4166 33.9604 12.6402 32.6236 13.8541 31.3041C14.8611 30.2277 15.7291 29.0562 16.4583 27.7895C17.1875 26.5229 18.0555 25.3333 19.0625 24.2208C19.8263 23.318 20.7118 22.5715 21.7187 21.9812C22.7257 21.3909 23.8194 21.0951 25 21.0937C26.1805 21.0937 27.2743 21.3715 28.2812 21.927C29.2882 22.4826 30.1736 23.2118 30.9375 24.1145C31.9097 25.2257 32.7694 26.4236 33.5166 27.7083C34.2638 28.993 35.1402 30.1909 36.1458 31.302C37.3611 32.6215 38.5847 33.9583 39.8166 35.3125C41.0486 36.6666 41.6652 38.2465 41.6666 40.052C41.6666 41.684 41.1368 43.0993 40.077 44.2979C39.0173 45.4965 37.7069 46.0951 36.1458 46.0937C34.2708 46.0937 32.4132 45.9375 30.5729 45.625C28.7326 45.3125 26.875 45.1562 25 45.1562C23.125 45.1562 21.2673 45.3125 19.427 45.625C17.5868 45.9375 15.7291 46.0937 13.8541 46.0937Z" fill="#B1D3EC"/>
                                                </svg>
                                                </i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body cleartfix">
                                <a href="admin/categories">
                                    <div class="media align-items-stretch">
                                        <div class="media-body">
                                            <h4>Categorias</h4>
                                        </div>
                                        <div class="align-self-center">
                                            <i class=" success font-large-2"><svg width="50" height="50"
                                                    viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_107_2)">
                                                        <path
                                                            d="M8.33333 22.9167H16.6667C17.2192 22.9167 17.7491 23.1362 18.1398 23.5269C18.5305 23.9176 18.75 24.4475 18.75 25V41.6667C18.75 42.2192 18.5305 42.7491 18.1398 43.1398C17.7491 43.5305 17.2192 43.75 16.6667 43.75H12.5C10.9058 43.7501 9.37184 43.141 8.21196 42.0473C7.05207 40.9537 6.35394 39.4581 6.26042 37.8667L6.25 37.5V25C6.25 24.4475 6.46949 23.9176 6.86019 23.5269C7.25089 23.1362 7.7808 22.9167 8.33333 22.9167ZM43.75 25V37.5C43.7501 39.0942 43.141 40.6282 42.0473 41.788C40.9537 42.9479 39.4581 43.6461 37.8667 43.7396L37.5 43.75H25C24.4475 43.75 23.9176 43.5305 23.5269 43.1398C23.1362 42.7491 22.9167 42.2192 22.9167 41.6667V25C22.9167 24.4475 23.1362 23.9176 23.5269 23.5269C23.9176 23.1362 24.4475 22.9167 25 22.9167H41.6667C42.2192 22.9167 42.7491 23.1362 43.1398 23.5269C43.5305 23.9176 43.75 24.4475 43.75 25ZM37.5 6.25C39.0942 6.24991 40.6282 6.85901 41.788 7.95267C42.9479 9.04634 43.6461 10.5419 43.7396 12.1333L43.75 12.5V16.6667C43.75 17.2192 43.5305 17.7491 43.1398 18.1398C42.7491 18.5305 42.2192 18.75 41.6667 18.75H25C24.4475 18.75 23.9176 18.5305 23.5269 18.1398C23.1362 17.7491 22.9167 17.2192 22.9167 16.6667V8.33333C22.9167 7.7808 23.1362 7.25089 23.5269 6.86019C23.9176 6.46949 24.4475 6.25 25 6.25H37.5ZM18.75 8.33333V16.6667C18.75 17.2192 18.5305 17.7491 18.1398 18.1398C17.7491 18.5305 17.2192 18.75 16.6667 18.75H8.33333C7.7808 18.75 7.25089 18.5305 6.86019 18.1398C6.46949 17.7491 6.25 17.2192 6.25 16.6667V12.5C6.24991 10.9058 6.85901 9.37184 7.95267 8.21196C9.04634 7.05207 10.5419 6.35394 12.1333 6.26042L12.5 6.25H16.6667C17.2192 6.25 17.7491 6.46949 18.1398 6.86019C18.5305 7.25089 18.75 7.7808 18.75 8.33333Z"
                                                            fill="#F7C6CC" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_107_2">
                                                            <rect width="50" height="50" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i>
                                        </div>
                                    </div>
                                </a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
