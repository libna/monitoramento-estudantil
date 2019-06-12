@extends('layouts.app')
        
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-6 col-sm-4">
    	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		    	<a target="_blank" href="http://portal.ifpe.edu.br/noticias/sai-relacao-de-isentos-da-taxa-do-vestibular/view">
		      		<img src="{{asset('img/ifpe1.png')}}" class="d-block w-100" alt="...">
		      	</a>
		    </div>
		    <div class="carousel-item">
				<a target="_blank" href="http://portal.ifpe.edu.br/noticias/propesq-divulga-novo-cronograma-do-edital-de-iniciacao-cientifica/view">
		      		<img src="{{asset('img/ifpe2.png')}}" class="d-block w-100" alt="...">
		      	</a>	
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
    </div>
    <div class="col-6 col-sm-8">
    	<h3><u>IFPE divulga edital de concurso para cargos técnico-administrativos</u></h3>
		<p>O Instituto Federal de Educação, Ciência e Tecnologia (IFPE) divulgou novo edital de concurso público para o preenchimento de cargos técnico-administrativos. Foram abertas 44 vagas para cargos de nível médio e superior. As inscrições começam no dia 1º de julho e seguem até 6 de agosto. As provas escritas estão marcadas para o dia 6 de outubro.</p>
		<p><strong>Consulte o <a target="_blank" href="https://cvest.ifpe.edu.br/concurso2019_adm/arquivos/01.%20Edital-27-2019-GR-Tecnico-Administrativos.pdf">edital</a> do Concurso</strong></p>
    </div>
    <div class="col">
    	<h3><u>Oportunidades de bolsas de estudos na Espanha e na Itália</u></h3>
    	<p>A Next International Business School, em colaboração com a Embaixada do Brasil em Madri, oferece aos estudantes brasileiros um programa de bolsas de estudo para o próximo ano letivo (2019-2020), para realizar uma pós-graduação na sede da escola em Madri. O programa oferta 18 bolsas de estudo parciais (50% do valor) e nove bolsas integrais – uma integral e duas parciais para cada master – para a modalidade presencial dos seguintes cursos:</p>
    	<table class="table">
		  <thead>
		    <tr>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td><a target="_blank" href="https://www.nextibs.com.br/pos-graduacoes-business-school/master-em-economia-verde/">Master em Economia Verde: Estratégias Empresariais de Sustentabilidade</a></td>
		      <td><a target="_blank" href="https://www.nextibs.com.br/pos-graduacoes-business-school/master-em-inteligencia-empresarial-big-data/">Master em Inteligência Empresarial & Big Data</a></td>
		      <td><a target="_blank" href="https://www.nextibs.com.br/pos-graduacoes-business-school/master-universitario-em-comunicacao-politica-avancada/">Master Universitário em Comunicação Política Avançada</a></td>
		    </tr>
		    <tr>
		      <td><a target="_blank" href="https://www.nextibs.com.br/pos-graduacoes-business-school/master-em-marketing-turistico/">Master em Marketing Turístico e Promoção de Destinos na América Latina e Europa</a></td>
		      <td> <a target="_blank" href="https://www.nextibs.com.br/pos-graduacoes-business-school/master-em-ciberseguranca/">Master em Cibersegurança</a></td>
		      <td><a target="_blank" href="https://www.nextibs.com.br/pos-graduacoes-business-school/master-em-direcao-de-comunicacao-corporativa-e-marketing-digital/">Master em Direção de Comunicação Corporativa e Marketing Digital</a></td>
		    </tr>
		    <tr>
		      <td><a target="_blank" href="https://www.nextibs.com.br/pos-graduacoes-business-school/master-em-inteligencia-turistica-gestao-e-competitividade-internacional/">Master em Inteligência Turística: Gestão e Competitividade Internacional</a></td>
		      <td><a target="_blank" href="https://www.nextibs.com.br/pos-graduacoes-business-school/master-em-negocios-internacionais/">Master em Negócios Internacionais (MIB)</a></td>
		      <td><a target="_blank" href="https://www.nextibs.com.br/pos-graduacoes-business-school/master-internacional-em-criacao-e-aceleracao-empresarial/">Master Internacional em Criação e Aceleração Empresarial (MICAE)</a></td>
		    </tr>
		  </tbody>
		</table>
	</div>
	<!-- <div class="col">
    	<h3><u>Oportunidades de bolsas de estudos na Espanha e na Itália</u></h3>
    	<p>A Next International Business School, em colaboração com a Embaixada do Brasil em Madri, oferece aos estudantes brasileiros um programa de bolsas de estudo para o próximo ano letivo (2019-2020), para realizar uma pós-graduação na sede da escola em Madri. O programa oferta 18 bolsas de estudo parciais (50% do valor) e nove bolsas integrais – uma integral e duas parciais para cada master – para a modalidade presencial dos seguintes cursos:</p>
    	<table class="table">
		  <thead>
		    <tr>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td><a target="_blank" href="https://www.nextibs.com.br/pos-graduacoes-business-school/master-em-economia-verde/">Master em Economia Verde: Estratégias Empresariais de Sustentabilidade</a></td>
		      <td><a target="_blank" href="https://www.nextibs.com.br/pos-graduacoes-business-school/master-em-inteligencia-empresarial-big-data/">Master em Inteligência Empresarial & Big Data</a></td>
		      <td><a target="_blank" href="https://www.nextibs.com.br/pos-graduacoes-business-school/master-universitario-em-comunicacao-politica-avancada/">Master Universitário em Comunicação Política Avançada</a></td>
		    </tr>
		    <tr>
		      <td><a target="_blank" href="https://www.nextibs.com.br/pos-graduacoes-business-school/master-em-marketing-turistico/">Master em Marketing Turístico e Promoção de Destinos na América Latina e Europa</a></td>
		      <td> <a target="_blank" href="https://www.nextibs.com.br/pos-graduacoes-business-school/master-em-ciberseguranca/">Master em Cibersegurança</a></td>
		      <td><a target="_blank" href="https://www.nextibs.com.br/pos-graduacoes-business-school/master-em-direcao-de-comunicacao-corporativa-e-marketing-digital/">Master em Direção de Comunicação Corporativa e Marketing Digital</a></td>
		    </tr>
		    <tr>
		      <td><a target="_blank" href="https://www.nextibs.com.br/pos-graduacoes-business-school/master-em-inteligencia-turistica-gestao-e-competitividade-internacional/">Master em Inteligência Turística: Gestão e Competitividade Internacional</a></td>
		      <td><a target="_blank" href="https://www.nextibs.com.br/pos-graduacoes-business-school/master-em-negocios-internacionais/">Master em Negócios Internacionais (MIB)</a></td>
		      <td><a target="_blank" href="https://www.nextibs.com.br/pos-graduacoes-business-school/master-internacional-em-criacao-e-aceleracao-empresarial/">Master Internacional em Criação e Aceleração Empresarial (MICAE)</a></td>
		    </tr>
		  </tbody>
		</table>
	</div> -->
  </div>
</div>
@endsection

