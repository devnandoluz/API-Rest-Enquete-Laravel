@if (Auth::check())
    <div class="container" style="padding: 2rem">
        <div class="row col-sm-12  bg-default">
            <div class="container col-sm-12">
                <br>
                <h1>Documentação do Projeto</h1>
                <h5> 1. Introdução </h5>
                            <h6> 1.1 Finalidade </h6>
                            <p>  A proposta deste documento é coletar, analisar e definir as necessidades e funcionalidades
                            gerais do projeto API Enquete. Seu foco está nas necessidades dos usuários e no motivo da
                            existência destas necessidades.
                            </p>
                            <p> Seu escopo engloba a definição dos gestores do sistema, dos representantes dos usuários, seus
                            problemas, necessidades e das características essenciais do sistema para o atendimento destes
                            requisitos.
                            </p>
                            <p>Termos e abreviaturas específicos podem ser encontrados no Glossário do respectivo projeto. </p>

                            <h5>2. Posicionamento </h5>
                            <h6>2.1 Descrição do Problema </h6>
                            <table class="table">
                                    <tr>
                                        <td>Problema</td>
                                        <td> 
                                            Informatizar o atual processo aplicado, onde o cliente final é incomodado com a enquete para preenchimento escrito e os
                                            dados são contabilizados manualmente.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Afeta</td>
                                        <td>
                                            Respondente, o qual alimenta suas; <br/>
                                            Responsável pela aplicação da enquete; <br/>
                                            Avaliador dos dados colhidos <br/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Impacto</td>
                                        <td>
                                            Demanda de tempo hábil é maior a fim de gerar relatórios e
                                            atingir público alvo desejado de forma abrangente. <br/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Solução</td>
                                        <td>
                                            Facilitar a aplicação das enquetes para os respondentes; <br/>
                                            Aumentar a eficácia da gestão dos dados colhidos no
                                            experimento; <br/>
                                            Elevar a produtividade da equipe de pesquisa;<br/>
                                            Informatizar o fluxo de atividades; <br/>
                                        </td>
                                    </tr>
                            </table>

                            <h5> 3.3 Necessidades do Cliente </h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">Identificador</th>
                                    <th scope="col">Necessidade</th>
                                    <th scope="col">Prioridade</th>
                                    <th scope="col">Solução Atual</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">Aplicação de enquetes.</th>
                                    <td>Sofisticar e elevar a praticidade de aplicações de enquetes.</td>
                                    <td>Alta.</td>
                                    <td>Aplicar as enquetes manualmente aos ouvintes.</td>
                                    </tr>
                                </tbody>
                            </table>

                            <h5>4. Visão Geral do Produto </h5>
                            <h6>4.1 Perspectiva do Produto </h6>
                            <p>A aplicação tem a função de ser utilizado tanto para sofisticar o processo da aplicação de pesquisas
                            presente no ambiente atual, quanto para automatizar o processo de gestão dos dados. </p>
                            <h6>4.2 Tabela de Funcionalidades </h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">Funcionalidades</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>
                                        1. Gerenciar respondentes;<br/>
                                        2. Gerenciar enquetes;<br/>
                                        3. Gerenciar usuários;<br/>
                                        4. Responder enquetes;<br/>
                                        5. Gerir dados pós fechamento da enquete.<br/>
                                        6. Integração com demais sistemas web, via JSON.<br/>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>

                            <h5>5. Restrições </h5>
                            <h6>Para o implemento da aplicação é necessário no ambiente de produção:
                                Recursos necessários no servidor da aplicação: PHP 7.1.3, PHP Composer, Laravel, servidor
                                SQL.
                            </h6>
                            <p>
                            Requisitos mínimos hardware:<br/>
                            S.O: Windows Server 2012/Linux Server 7 (64-bit).<br/>
                            Processador: Processador Intel/AMD -2 Cores @2.0Ghz 64 bits.<br/>
                            Memória: 4 GB.<br/>
                            Espaço em disco: 20 Gb.<br/>
                            Espaço adicional para armazenamento dos dados
                            colhidos.<br/>
                            Espaço adicional para futuros upgrades do software.<br/>
                            </p>
                            <p>
                            Requisitos mínimos – Usuários/Gestores:<br/>
                            S.O: Windows 7, 8/8.1 ou 10 / Distribuição Linux 6 ou
                            superior / MacOS.<br/>
                            Processador: Intel/AMD @1.5GHz<br/>
                            Memória: 1 GB RAM.<br/>
                            Navegador atualizado em
                            sua versão estável:<br/>
                            Firefox;<br/>
                            Safari;<br/>
                            Google Chrome;<br/>
                            Outros;<br/>
                            </p>    
                        </div>
                </div>
    </div>
    
@include ('menu.users') 
@else
    <?php 
    if(Auth::guest()){
    ?>
    @extends ('layouts.app')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 dash">
                <div class="panel panel-default">
                    <div class="panel-heading h1">Documentação do Projeto</div>
                        <div class="panel-body" style="min-height: 10rem;">
                            <h5> 1. Introdução </h5>
                            <h6> 1.1 Finalidade </h6>
                            <p>  A proposta deste documento é coletar, analisar e definir as necessidades e funcionalidades
                            gerais do projeto API Enquete. Seu foco está nas necessidades dos usuários e no motivo da
                            existência destas necessidades.
                            </p>
                            <p> Seu escopo engloba a definição dos gestores do sistema, dos representantes dos usuários, seus
                            problemas, necessidades e das características essenciais do sistema para o atendimento destes
                            requisitos.
                            </p>
                            <p>Termos e abreviaturas específicos podem ser encontrados no Glossário do respectivo projeto. </p>

                            <h5>2. Posicionamento </h5>
                            <h6>2.1 Descrição do Problema </h6>
                            <table class="table">
                                    <tr>
                                        <td>Problema</td>
                                        <td> 
                                            Informatizar o atual processo aplicado, onde o cliente final é incomodado com a enquete para preenchimento escrito e os
                                            dados são contabilizados manualmente.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Afeta</td>
                                        <td>
                                            Respondente, o qual alimenta suas; <br/>
                                            Responsável pela aplicação da enquete; <br/>
                                            Avaliador dos dados colhidos <br/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Impacto</td>
                                        <td>
                                            Demanda de tempo hábil é maior a fim de gerar relatórios e
                                            atingir público alvo desejado de forma abrangente. <br/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Solução</td>
                                        <td>
                                            Facilitar a aplicação das enquetes para os respondentes; <br/>
                                            Aumentar a eficácia da gestão dos dados colhidos no
                                            experimento; <br/>
                                            Elevar a produtividade da equipe de pesquisa;<br/>
                                            Informatizar o fluxo de atividades; <br/>
                                        </td>
                                    </tr>
                            </table>

                            <h5> 3.3 Necessidades do Cliente </h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">Identificador</th>
                                    <th scope="col">Necessidade</th>
                                    <th scope="col">Prioridade</th>
                                    <th scope="col">Solução Atual</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">Aplicação de enquetes.</th>
                                    <td>Sofisticar e elevar a praticidade de aplicações de enquetes.</td>
                                    <td>Alta.</td>
                                    <td>Aplicar as enquetes manualmente aos ouvintes.</td>
                                    </tr>
                                </tbody>
                            </table>

                            <h5>4. Visão Geral do Produto </h5>
                            <h6>4.1 Perspectiva do Produto </h6>
                            <p>A aplicação tem a função de ser utilizado tanto para sofisticar o processo da aplicação de pesquisas
                            presente no ambiente atual, quanto para automatizar o processo de gestão dos dados. </p>
                            <h6>4.2 Tabela de Funcionalidades </h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">Funcionalidades</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>
                                        1. Gerenciar respondentes;<br/>
                                        2. Gerenciar enquetes;<br/>
                                        3. Gerenciar usuários;<br/>
                                        4. Responder enquetes;<br/>
                                        5. Gerir dados pós fechamento da enquete.<br/>
                                        6. Integração com demais sistemas web, via JSON.<br/>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>

                            <h5>5. Restrições </h5>
                            <h6>Para o implemento da aplicação é necessário no ambiente de produção:
                                Recursos necessários no servidor da aplicação: PHP 7.1.3, PHP Composer, Laravel, servidor
                                SQL.
                            </h6>
                            <p>
                            Requisitos mínimos hardware:<br/>
                            S.O: Windows Server 2012/Linux Server 7 (64-bit).<br/>
                            Processador: Processador Intel/AMD -2 Cores @2.0Ghz 64 bits.<br/>
                            Memória: 4 GB.<br/>
                            Espaço em disco: 20 Gb.<br/>
                            Espaço adicional para armazenamento dos dados
                            colhidos.<br/>
                            Espaço adicional para futuros upgrades do software.<br/>
                            </p>
                            <p>
                            Requisitos mínimos – Usuários/Gestores:<br/>
                            S.O: Windows 7, 8/8.1 ou 10 / Distribuição Linux 6 ou
                            superior / MacOS.<br/>
                            Processador: Intel/AMD @1.5GHz<br/>
                            Memória: 1 GB RAM.<br/>
                            Navegador atualizado em
                            sua versão estável:<br/>
                            Firefox;<br/>
                            Safari;<br/>
                            Google Chrome;<br/>
                            Outros;<br/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    <?php
        }
    ?>
    
    @endif