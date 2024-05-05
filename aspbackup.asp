<!--#include virtual="/web/includes/ownfunctions.inc"-->
<!--#include virtual="/web/includes/connection.inc"-->
<%
    Response.CodePage = 65001
    call open_connection
%>

<!DOCTYPE html>
<html>
<head lang="pt-BR">
    <!--#include virtual="/web/includes/libraries.inc"-->
    <title>Intranet Franco - Home Office</title>

    <style>
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .cell.colspan8 {
            border: 1px solid #ccc; 
            padding: 5px; 
            height: 780px;
        }

        .weekdays {
            display: flex;
            justify-content: center;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 5px;
            height: 35px;
        }

        .weekday {
            flex: 1;
            text-align: center;
        }

        .dates {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 3px;
            margin: 2px auto;
        }

        .date {
            padding: 5px;
            text-align: center;
            border: 1px solid #ccc;
            height: 135px;
            cursor: pointer; /* Altera o cursor para indicar que os dias são clicáveis */
            transition: background-color 0.3s; /* Adiciona transição suave */
        }

        .date:hover {
            background-color: #f0f0f0; /* Muda a cor de fundo ao passar o mouse */
        }

        .prev-month, .next-month {
            
            background-color: #cac8c8;
        }

        .today {
            background-color: #5da9cf; /* Cor para o dia de hoje */
        }

        .returnUsers{
            border: 1px solid #ccc;
            display: none;
            padding: 3%;
            margin: .5rem;
            cursor: pointer;
        }

        .hoDay{
            /* background-color: red; */
            /* display: grid;
            grid-template-rows: auto auto;
            grid-template-columns: 50% 50%; */
        }

        .colabs{
            /* background-color: green; */
            font-size: 1rem;
            display: grid;
            grid-template-columns: auto auto;
            grid-template-rows: 50%;
            /* margin: 1rem; */
            /* padding: 1rem; */
        }

        .colabsChild{
            margin: .3rem;
            /* border: 1px solid #ccc; */
        }

    </style>
    
</head>
    <body>
        <!-- Se o usuário não estiver logado -->
        <% if session("user.codigo")="" then %>
        <header class="bg-dark" data-load="header-off.asp"></header>
        <div id="container" class="container page-content" style="display: none;" data-load="nolog.asp?url=<%=Request.ServerVariables("SCRIPT_NAME")%>"></div>
        <!-- Se o usuário não tiver acesso -->
        <% elseif not getAcesso(true) Then %>
        <% response.redirect("noaccess.asp") %>
        <% else %>
        <% fAno = year(now()) %>
        <% LogAcesso(Request.ServerVariables("URL")) %>
        <header class="bg-dark" data-load="header.asp"></header><br>
        <div id="carregando" class="center">
            <div data-role="preloader" data-type="cycle" data-style="color"></div>
        </div>

        <div class="container page-content">
            <h2><span class="mif-calendar"></span>
                Home Office<small class="on-right"> Escala</small>
            </h2>
            <hr class="thin">
            <div class="grid">
                <form id="frmFormCHomeOfficeSearch" name="frmFormCHomeOfficeSearch" method="POST" action="javascript:void(0)" data-on-submit="submitFormMRoomScheduleSearch" data-role="validator" data-show-required-state="false" data-hint-mode="line" data-hint-background="bg-red" data-hint-color="fg-white" data-hide-error="5000">
                    <div class="row cells12">
                        <div class="cell colspan2">
                            <div class="input-control select full-size" data-role="input">
                                <select id="cboFDepto" name="cboFDepto" data-validate-hint="Selecione o departamento" title="Selecione o departamento">
                                    <option value="" selected style="display: none;">Departamento*</option>
                                    <%=addOptionSelectDepartamentoAuthority()%>
                                </select>
                                <button type="button" class="button" id="btnCHomeOfficeAtualizar" name="btnCHomeOfficeAtualizar" title="Atualizar calendario"><span class="mif-loop2"></span></button>    
                                <span class="input-state-error mif-warning"></span>
                                <span class="input-state-success mif-checkmark"></span>
                            </div>
                            <div id="returnUsers" name="returnUsers" style="border: 1px solid #ccc; display: none;height:600px;overflow-y: auto;" class="cell header">
                                <h2 style="text-align:;font-weight: bold;margin:;padding-left: 3%;">Colaboradores</h2>
                                <hr class="thin">
                                <!-- Retorno de usuários por departamento -->

                            </div>
                        </div>
                        <div class="cell colspan8" style="height: fit-content;width: fit-content;">
                            <div class="header" style="display: flex; align-items: center;">
                                <button type="button" class="button" id="btnCHomeOfficeVoltar" name="btnCHomeOfficeVoltar" title="Voltar um mês"><span class="mif-arrow-left"></span></button>
                                
                                <div style="flex-grow: 1; text-align: center;">
                                    <input type="month" id="txtCompetencia" name="txtCompetencia" value='<%=Year(Now()) & "-" & iif(Month(Now()) < 10, "0" & Month(Now()), Month(Now()) )%>' placeholder="Período*" data-validate-func="required" data-validate-hint="Informe o período">
                                    <!-- value="<%=getSocialMonth(now())%>" -->
                                </div>

                                <button type="button" class="button" id="btnCHomeOfficeAvancar" name="btnCHomeOfficeAvancar" title="Avançar um mês"><span class="mif-arrow-right" ></span></button>
                            </div>
                            <div class="weekdays">
                                <div class="weekday">Dom</div>
                                <div class="weekday">Seg</div>
                                <div class="weekday">Ter</div>
                                <div class="weekday">Qua</div>
                                <div class="weekday">Qui</div>
                                <div class="weekday">Sex</div>
                                <div class="weekday">Sáb</div>
                            </div>
                            <div class="dates">
                                <!-- Os dias do mês serão adicionados dinamicamente aqui -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!--Start dialog session-->

        <!--End dialog session-->

        <script>

            $(document).ready(function() {
                preencherDiasDoMes()
            });

            // $("#cboFDepto").on('change', function(){
            //     console.log("Display block")
            //     dados = "cboFDepto=" + $(this).val()
            //     console.log(dados)
                
            //     var returnUsers = ""
                
            //     // Ajax para retornar os colaboradores do setor selecionado
            //     var returnUsers = $("#returnUsers")
            //     $.ajax({
            //         url: "engines/grh-calendario-home-office-return-users-json.asp",
            //         type: 'POST',
            //         data: dados,
            //         success: function(responseText) {

            //             dataJson = JSON.parse(responseText)
            //             console.log(dataJson)
            //             var collaboratorDiv = ""
            //             dataJson.data.forEach(colaborador => {
            //                 console.log(colaborador);

            //                 // Adicionar div para com o nome do colaborador para cada colaborador
            //                 console.log(colaborador);

            //                 // Create a div element for each collaborator's name
            //                 collaboratorDiv = $("<title>Colaboradores</title>")
            //                 collaboratorDiv = $("<div class='returnUsers cell'>"+ colaborador +"</div>")

            //                 // Append the collaborator's div to the returnUsers container
            //                 returnUsers.append(collaboratorDiv);

            //                 $("#returnUsers").css("display", "block")
            //                 $(".returnUsers").css("display", "block")

            //             })
            //         }
            //     })

                    // console.log(returnUsers)

                // $.ajax({
                //     url: "engines/grh-calendario-home-office-return-users-json.asp",
                //     type: 'POST',
                //     data: dados,
                //     success: function (returndata) {
                //         console.log("Success! Data received:", returndata);
                        
                //         try {
                //             // Parse the JSON data
                //             var teste = JSON.parse(returndata);
                            
                //             // Access the div where collaborators will be appended
                //             var returnUsersDiv = $("#testediv");

                //             // Loop through each collaborator
                //             teste.data.forEach(colaborador => {
                //                 console.log("Adding collaborator:", colaborador);

                //                 // Create a div element for each collaborator
                //                 var collaboratorDiv = $("<div>"+ colaborador +"</div>");

                //                 // Set the content or attributes of the div as needed
                //                 collaboratorDiv.text(colaborador.name); // For example, assuming 'name' is a property of each collaborator

                //                 // Append the collaborator div to the parent div
                //                 returnUsersDiv.append(collaboratorDiv);
                //             });
                //         } catch (error) {
                //             console.error("Error parsing JSON:", error);
                //         }
                //     },
                //     error: function(XMLHttpRequest, textStatus, errorThrown) {
                //         console.error("AJAX request failed:", textStatus, errorThrown);
                //     }
                // });

            // })

            $("#txtCompetencia").on('change', function(){
                searchDate = `${$(this).val()}-01`.split("-")
                year = searchDate[0]
                month = searchDate[1]-1
                dataAtual = new Date(year, month)
                console.log(dataAtual)
                preencherDiasDoMes()
            });
            
            $("#btnCHomeOfficeAvancar").click(function() {
                console.log("AVANÇAR 1 MÊS");
                var teste = moment($("#txtCompetencia").val()).add(1, 'months')
                $("#txtCompetencia").val(teste.format("YYYY-MM"));
                dataAtual.setMonth(dataAtual.getMonth() + 1); // Acrescenta um mês
                preencherDiasDoMes()
            });
            
            $("#btnCHomeOfficeAtualizar").click(function() {
                console.log("atualizar")
                preencherDiasDoMes()
            });

            $("#btnCHomeOfficeVoltar").click(function() {
                console.log("VOLTAR 1 MÊS");
                var teste = moment($("#txtCompetencia").val()).subtract(1, 'months')
                $("#txtCompetencia").val(teste.format("YYYY-MM"));
                dataAtual.setMonth(dataAtual.getMonth() - 1); // Subtrai um mês
                preencherDiasDoMes()
            });

            var dataAtual = new Date(); // Obtém a data atual
            // dataAtual.setMonth(dataAtual.getMonth() - 1); // Subtrai um mês

            function preencherDiasDoMes(){
                console.log("exec: preencherDiasDoMes")
                console.log($("#txtCompetencia").val())
                $.ajax({
                    url: '/web/engines/grh-calendario-home-office-json.asp',
                    method: 'POST',
                    dataType: 'json',
                    success: function(data) {
                        
                        // Limpar o conteúdo existente
                        const datesContainer = document.querySelector('.dates');
                        datesContainer.innerHTML = '';

                        // Obter a data atual
                        console.log("dataAtual "+dataAtual)

                        // Obter o primeiro dia do mês atual
                        const primeiroDiaMes = new Date(dataAtual.getFullYear(), dataAtual.getMonth(), 1).getDay();
                        console.log("primeiroDiaMes "+primeiroDiaMes)

                        // Obter o último dia do mês anterior
                        const ultimoDiaMesAnterior = new Date(dataAtual.getFullYear(), dataAtual.getMonth(), 0).getDate();
                        console.log("ultimoDiaMesAnterior "+ultimoDiaMesAnterior)

                        // Obter o índice correto do primeiro dia do mês na semana
                        const indiceInicioSemana = (primeiroDiaMes === 0) ? 6 : primeiroDiaMes - 1;

                        // Preencher os últimos dias do mês anterior
                        for (let diaAnterior = ultimoDiaMesAnterior - indiceInicioSemana; diaAnterior <= ultimoDiaMesAnterior; diaAnterior++) {
                            const diaAnteriorElemento = document.createElement('div');
                            diaAnteriorElemento.textContent = diaAnterior;
                            diaAnteriorElemento.classList.add('date', 'prev-month'); // Adiciona uma classe para estilização diferente
                            datesContainer.appendChild(diaAnteriorElemento);
                        }

                        // Obter o número de dias no mês atual
                        const ultimoDiaMes = new Date(dataAtual.getFullYear(), dataAtual.getMonth() + 1, 0).getDate();

                        // Array para mapear os dias da semana
                        const diasSemana = ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'];

                        // Preencher os dias do mês
                        for (let dia = 1; dia <= ultimoDiaMes; dia++) {
                            const diaElemento = document.createElement('div');
                            diaElemento.textContent = dia;

                            const divColabs = document.createElement('div');
                            diaElemento.appendChild(divColabs);
                            divColabs.classList.add('debug', 'colabs')

                            const divColabHome = document.createElement('div');
                            divColabHome.textContent = "divColabHome";
                            divColabs.appendChild(divColabHome);
                            divColabHome.classList.add('colabsChild')

                            const divColabPres = document.createElement('div');
                            divColabPres.textContent = "divColabPres";
                            divColabs.appendChild(divColabPres);
                            divColabPres.classList.add('colabsChild')

                            // Calcular o índice correto do dia na semana
                            const indiceDiaSemana = (dia + indiceInicioSemana - 1) % 7;

                            // Adicionar a classe correspondente ao dia da semana
                            diaElemento.classList.add('date', 'hoDay1', diasSemana[indiceDiaSemana]);

                            // Adicionar a classe 'today' se for o dia atual
                            if (dia === dataAtual.getDate() && dataAtual.getMonth() === new Date().getMonth()) {
                                diaElemento.classList.add('today', 'hoDay2');
                            }

                            datesContainer.appendChild(diaElemento);
                        }
                        
                            // Obter o primeiro dia do mês seguinte
                            const primeiroDiaMesSeguinte = new Date(dataAtual.getFullYear(), dataAtual.getMonth() + 1, 1).getDay();

                            // Preencher os primeiros dias do mês seguinte
                            for (let diaSeguinte = 1; diaSeguinte <= 7 - primeiroDiaMesSeguinte; diaSeguinte++) {
                                const diaSeguinteElemento = document.createElement('div');
                                diaSeguinteElemento.textContent = diaSeguinte;
                                diaSeguinteElemento.classList.add('date', 'next-month'); // Adiciona uma classe para estilização diferente
                                datesContainer.appendChild(diaSeguinteElemento);
                            }
                    }
                })
            }


            // Função para preencher os dias do mês
    // function preencherDiasDoMes() {
    //     // Limpar o conteúdo existente
    //     const datesContainer = document.querySelector('.dates');
    //     datesContainer.innerHTML = '';

        // Obter a data atual
    //     const dataAtual = new Date();

    //     // Obter o primeiro dia do mês atual
    //     const primeiroDiaMes = new Date(dataAtual.getFullYear(), dataAtual.getMonth(), 1).getDay();

    //     // Obter o último dia do mês anterior
    //     const ultimoDiaMesAnterior = new Date(dataAtual.getFullYear(), dataAtual.getMonth(), 0).getDate();

    //     // Obter o índice correto do primeiro dia do mês na semana
    //     const indiceInicioSemana = (primeiroDiaMes === 0) ? 6 : primeiroDiaMes - 1;

    //     // Preencher os últimos dias do mês anterior
    //     for (let diaAnterior = ultimoDiaMesAnterior - indiceInicioSemana; diaAnterior <= ultimoDiaMesAnterior; diaAnterior++) {
    //         const diaAnteriorElemento = document.createElement('div');
    //         diaAnteriorElemento.textContent = diaAnterior;
    //         diaAnteriorElemento.classList.add('date', 'prev-month'); // Adiciona uma classe para estilização diferente
    //         datesContainer.appendChild(diaAnteriorElemento);
    //     }

    //     // Obter o número de dias no mês atual
    //     const ultimoDiaMes = new Date(dataAtual.getFullYear(), dataAtual.getMonth() + 1, 0).getDate();

    //     // Array para mapear os dias da semana
    //     const diasSemana = ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'];

    //     // Preencher os dias do mês
    //     for (let dia = 1; dia <= ultimoDiaMes; dia++) {
    //         const diaElemento = document.createElement('div');
    //         diaElemento.textContent = dia;

    //         // Calcular o índice correto do dia na semana
    //         const indiceDiaSemana = (dia + indiceInicioSemana - 1) % 7;

    //         // Adicionar a classe correspondente ao dia da semana
    //         diaElemento.classList.add('date', diasSemana[indiceDiaSemana]);

    //         // Adicionar a classe 'today' se for o dia atual
    //         if (dia === dataAtual.getDate() && dataAtual.getMonth() === new Date().getMonth()) {
    //             diaElemento.classList.add('today');
    //         }

    //         datesContainer.appendChild(diaElemento);
    //     }

    //     // Obter o primeiro dia do mês seguinte
    //     const primeiroDiaMesSeguinte = new Date(dataAtual.getFullYear(), dataAtual.getMonth() + 1, 1).getDay();

    //     // Preencher os primeiros dias do mês seguinte
    //     for (let diaSeguinte = 1; diaSeguinte <= 6 - primeiroDiaMesSeguinte; diaSeguinte++) {
    //         const diaSeguinteElemento = document.createElement('div');
    //         diaSeguinteElemento.textContent = diaSeguinte;
    //         diaSeguinteElemento.classList.add('date', 'next-month'); // Adiciona uma classe para estilização diferente
    //         datesContainer.appendChild(diaSeguinteElemento);
    //     }
    // }

    // // Chamar a função para preencher os dias do mês ao carregar a página
    // preencherDiasDoMes();
    

        </script>

        <% End If %>
    </body>
</html>
<% 
    call close_connection
%>

