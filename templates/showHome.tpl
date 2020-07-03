{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    {include 'header.admin.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    {include 'header.home.tpl'}
{/if}
<div class="contenedor-msg">
    {if {$error}}
        <MARQUEE loop="2">{$error}</MARQUEE>
    {/if}
</div>

<div class="Iam">
    <p class="font-size">Institución dedicada a</p>
    <b>
    <div class="innerIam">
        La Enseñanza del Deporte a niños, jóvenes y adultos.<br /> 
        La Formación Humana de niños, jóvenes y adultos.<br />
        Fortalecer lazos familiares.<br /> 
        Fortalecer lazos de amistad.<br />
        Promover actividad para nuestra ciudad.
        </div>
    </b>
</div>

{*<p class="frase">"Todos tenemos sueños, pero para que se vuelvan realidad se necesita una gran determinación, dedicación, autodisciplina y esfuerzo."</P>
*}
<div class="hacete-socio">

    <h1><MARQUEE> | ¡Hacete Socio! | !Colaborás! | ¡Participás! | ¡Formás Parte! |</MARQUEE></h1>
    <a class="socio" href="asociarse">¡Asociate!</a>

</div>

    
{include 'templates/footer.tpl'}