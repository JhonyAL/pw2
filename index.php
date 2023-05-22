<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>

    <link rel="stylesheet" href="global.css">
</head>
<body>

    <?php
        $characters = [
            'Erik Cartman' => [
                'image'=> 'https://media.npr.org/programs/wesat/features/2008/apr/cartman1_200-140d767a27065ad3482ab64f1ddcf4a6c9ed32bd-s1100-c50.jpg',
                'editorial'=> 'South Park',
                'creation_date' => '1997',
                'creator' => 'Trey Parker e Matt Stone',
                'description' => 'Eric Theodore Cartman, ou apenas Cartman, é um dos personagens principais, junto a Stanley Marsh, Kyle Broflovski, e Kenny McCormick. Em alguns episódios, como em "Trapper Keeper", ele é o principal antagonista da trama. Nos primeiros episódios, Kenny era visto como seu melhor amigo, porém, recentemente este lugar tem sido tomado por Butters Stotch.'
            ],
            'Stan Marsh' => [
                'image' => 'https://images.paramount.tech/uri/mgid:arc:imageassetref:shared.southpark.br:f4dce21b-9e98-4116-b0c8-79de0e1b63eb?quality=0.7&gen=ntrn&legacyStatusCode=true',
                'editorial' => 'South Park',
                'creation_date' => '1997',
                'creator' => 'Trey Parker e Matt Stone',
                'description' => 'Stanley "Stan" Marsh é um dos personagens principais, juntamente com Kyle Broflovski, Kenny McCormick, e Eric Cartman. Ele é muitas vezes o protagonista principal do show. Seu melhor amigo é Kyle Broflovski.<br /><br />

                Quando Kenny é morto, Stan voce matou ele sua puta meu Deus, você/ele/ela/eles matou Kenny!" Kyle vai então responder: "Seus filhos da puta!", Ou vice-versa.<br /><br />
                
                Slogan frequentemente usado de Stan durante as primeiras temporadas foi "Cara, isso é muito foda aqui", que se originou no segundo Espírito Natalino curto (a profanação foi censurado para fora). Em episódios recentes no entanto, este slogan desbotada.'
            ],
            'Kyle Broflovski' => [
                'image' => 'https://images.paramount.tech/uri/mgid:arc:imageassetref:shared.southpark.br:c1ab3e41-74f7-11ea-a59c-0a7527021758?quality=0.7&gen=ntrn&legacyStatusCode=true',
                'editorial' => 'South Park',
                'creation_date' => '1997',
                'creator' => 'Trey Parker e Matt Stone',
                'description' => '
                    Kyle Broflovski é um dos personagens principais de South Park , junto com Stan Marsh , Eric Cartman e Kenny McCormick . Baseado no co-criador Matt Stone , Kyle é membro da única família judia de South Park. Ele é frequentemente conhecido por isso, assim como por sua inteligência.
                    <br /><br />
                    Kyle é da fé judaica , mas esse detalhe não é revelado oficialmente até " Mr. Hankey, the Christmas Poo ", apesar de ter sido mencionado brevemente no segundo curta de The Spirit of Christmas e em  Big Gay Als Big Gay Boat Ride. Também foi mencionado em  Um elefante faz amor com um porco . Cartman regularmente faz comentários depreciativos sobre o povo judeu, muitas vezes diretamente na presença de Kyle especificamente para irritá-lo.
                '
            ],
            'Kenny McCormick' => [
                'image' => 'https://southparkstudios.mtvnimages.com/uri/mgid:arc:content:shared.southpark.br:414f38e2-742d-11ea-a59c-0a7527021758?quality=0.7',
                'editorial' => 'South Park',
                'creation_date' => '1997',
                'creator' => 'Trey Parker e Matt Stone',
                'description' => '
                Kenneth "Kenny" McCormick, dublado por Matt Stone, é um dos personagens principais, juntamente com Stan Marsh, Kyle Broflovski e Eric Cartman. Criado por Trey Parker e Matt Stone, ele apareceu pela primeira vez nos curtas-metragens "O Espírito de Natal", em 1992 e 1995. Ele é dublado por Mike Judge no filme "South Park: Maior, Melhor e Sem Cortes" e Eric Stough nos episódios "Os Jeffersons", "Piolhos", e "Mysterion Rises".
                <br /><br />
                Kenny é mais famoso por morrer em quase todos os episódios nas primeiras cinco temporadas de South Park. Ele também é facilmente reconhecível por quase sempre vestir um casaco laranja que cobre a maior parte do rosto e abafa suas falas. O personagem foi morto no final da quinta temporada, Kenny morre, mas volta no final da temporada seguinte, e desde então só morre ocasionalmente.
                '
            ],
            'Butters Stotch' => [
                'image' => 'https://images.paramount.tech/uri/mgid:arc:imageassetref:shared.southpark.gsa.en:317f2584-2a21-4d51-aff5-c32c5d73a5ad?quality=0.7&gen=ntrn&legacyStatusCode=true&format=jpg&width=1200&height=630&crop=true',
                'editorial' => 'South Park',
                'creation_date' => '1997',
                'creator' => 'Trey Parker, Matt Stone e Eric Stough',
                'description' => '
                Leopold "Butters" Stotch é um personagem importante da série. Ele é um aluno da quarta série em South Park Elementary . O papel de Butters gradualmente começou a aumentar depois que ele substituiu Kenny durante sua remoção temporária na sexta temporada . Isso permitiu a Butters ganhar mais tempo na tela e desenvolver ainda mais seu personagem. Ele é a "criança inocente" do grupo e o mais explorado e possivelmente o melhor "amigo" de Cartman. Butters é vagamente baseado em Eric Stough , um diretor/produtor de animação que trabalha na série.
                '
            ],
            'Heidi Turner' => [
                'image' => 'https://img-lb.fireden.net/co/image/1568/41/1568415128496.png',
                'editorial' => 'South Park',
                'creation_date' => '1997',
                'creator' => 'Trey Parker e Matt Stone',
                'description' => '
                    Heidi Turner é uma estudante da Escola Elementary South Park. Ela é geralmente retratada como uma das garotas populares da Quarta Série. Normalmente é vista com Wendy ,Bebe, Red, Milly, Annie, Lola, Esther e Sally.
                    <br /><br/>
                    Heidi deixou de ser um personagem de fundo menor, que foi introduzido na Terceira Temporada, para ganhar sua própria presença no universo South Park. Ela já percorreu um longo caminho ao longo da série. Como a maioria dos personagens de fundo nas primeiras temporadas, o modelo seria utilizado para preencher o espaço e, ocasionalmente, ser dada swaps de cor. Mais tarde, como a série progrediu, Heidi foi dado um esquema de cor permanente e, eventualmente, um nome, fazendo-a mais utilizável para papéis recorrentes. Ela obteve mais estabelecimento após o episódio "Marjorine", onde ela assumiu um papel importante, uma festa do pijama. Ela tem, até agora, manteve seu lugar no bando meninas ao longo da série. Seu papel parecem estar crescendo gradualmente.
                '
            ],
            'Randy Marsh' => [
                'image' => 'https://i.redd.it/bxb2cwzyn0ia1.jpg',
                'editorial' => 'South Park',
                'creation_date' => '1997',
                'creator' => 'Trey Parker e Matt Stone',
                'description' => '
                    Randy S. [4] Marsh é filho de Marvin e da vovó Marsh , marido de Sharon , e pai de Stan e Shelley . Ele faz sua estreia no episódio " Vulcão " da primeira temporada e é dublado por Trey Parker .
                    <br /><br />
                    Apesar de ser um geólogo com doutorado, ele é geralmente retratado como um idiota distraído, conduzindo muitos enredos de episódios nas temporadas posteriores, embora isso tenha sido revelado mais tarde devido a ele estar infeliz com seu casamento. No entanto, nas temporadas anteriores, ele estava mais calmo e equilibrado, muitas vezes dando conselhos aos meninos. Em You are Getting Old , ele se divorciou de sua esposa e se mudou. No entanto, em Ass Burgers ele se reconciliou com Sharon e se casou novamente, recuperando sua antiga casa. Na vigésima segunda temporada , Randy fundou o negócio de cultivo de cânhamo Tegridy Farms , antes de retornar ao seu trabalho de geólogo em South Park: The Streaming Wars Part 2.
                    <br /><br />
                    Randy recebeu o nome e é baseado no pai de Trey Parker , Randy Parker, que também é geólogo.
                '
            ],
            'Wendy Testaburger' => [
                'image' => 'https://images.paramount.tech/uri/mgid:arc:imageassetref:shared.southpark.br.en-us:96d53706-c201-4150-ac68-8064a944b5fc?quality=0.7&gen=ntrn&legacyStatusCode=true',
                'editorial' => 'South Park',
                'creation_date' => '1997',
                'creator' => 'Trey Parker e Matt Stone',
                'description' => '
                Wendy Testaburger é uma personagem coadjuvante importante em South Park . Ela é a mais proeminente das colegas de Stan , Kyle , Cartman e Kenny , bem como a namorada intermitente de Stan. Ela é uma aluna da quarta série da South Park Elementary . Ela fez sua primeira aparição e fala no episódio da primeira temporada " Cartman Gets an Anal Probe ". Ela foi dublada por quatro pessoas durante a série: Mary Kay Bergman , Mona Marshall , Eliza J. Schneider e atualmente April Stewart.. Ela é a personagem feminina mais proeminente da série.
                '
            ],
            
        ];
    ?>
    <div class="container">
        <h1>South Park</h1>
        <h2>Personagens</h2>
    

        <div class="cards">
            <?php 
                require_once('./components/Card.php');
                foreach ($characters as $name => $value) {
                    Card($name, $value['image'], $value['description'], $value['creation_date'], $value['editorial'], $value['creator']);
                }
            ?>
        </div>
    </div>
</body>
</html>