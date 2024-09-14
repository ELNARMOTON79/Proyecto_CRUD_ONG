<div class="flex-auto ml-64">
                <div class="flex flex-col">
                    <div class="flex flex-col bg-white">
                        <div class="flex flex-row space-x-3">
                            <!-- La clase translate-y-2 desplaza la imagen 0.5rem (8px) hacia abajo -->
                            <div class="flex-shrink-0 h-10 w-10 relative">
                                <img class="ml-3 h-10 w-10 rounded-full translate-y-2" 
                                    src="https://cdn.icon-icons.com/icons2/2104/PNG/512/manager_icon_129392.png" 
                                    alt="">
                            </div>
                            <h4 class="fa-2x font-bold text-gray-500 p-1">Bienvenido <?php echo htmlspecialchars($_SESSION['tipo_usuario']); ?> <?php echo htmlspecialchars($_SESSION['nombre']); ?></h4>
                        </div>
                        <!-- Aqui va a ir el correo del admin-->
                        <div class="text-sm text-gray-500 p-1">
                            <?php
                                echo $_SESSION['correo'];
                            ?>
                            <!-- Aqui se encuetra para mostrar la fecha -->
                            <p class="text-gray-400 p-1 text-right" id="current-date-time"></p> 
                        </div>
                    </div>
                    <div class="min-h-screen bg-blue-50">
                        <div class="p-4 font-bold text-gray-600">
                            Alumnos
                        </div>
                        <div class="grid gap-3 lg:col-span-1 md:cols-1 p-4">
                            <div class="col-span-2 flex flex-auto bg-white rounded shadow-sm items-center">
                                <table class="min-w-full divide-y divide-gray-200 table-auto">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-winder">Name</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-winder">Title</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-winder">Status</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-winder">Roles</th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- Aqui colocar las imagenes si es que hay -->
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-full" 
                                                        src="https://images2.alphacoders.com/137/thumbbig-1370257.webp" 
                                                        alt="">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            Alya russian
                                                        </div>
                                                        <!-- Aqui va a ir el correo del alumno-->
                                                        <div class="text-sm text-gray-500">alyaURSS@ucol.mx</div>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                        
                                            <!-- Aqui es para mirar el status del alumno si esta reprobado o lo que se quiera poner -->
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">
                                                Aprobado
                                            </td>

                                            <!-- Aqui Sera para mirar si esta activo o dado de baja el alumno-->
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-200 text-green-900">
                                                    Active
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">
                                                Alumno
                                            </td>
                                            <!-- Aqui se reprobrara o se acreditara al alumno segun lo que su calificacion diga-->
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                    Edit
                                                </a>
                                            </td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Tabla Fin -->
                        
                    </div>
                </div>
            </div>