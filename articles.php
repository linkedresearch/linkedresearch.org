<? $title = "Linked Research articles"; ?>
<? include 'top.php'; ?>
        <main>
            <article about="" typeof="schema:Article">
                <header>
                    <object data="media/images/linkedresearch_white.png" rel="schema:image" resource="media/images/linkedresearch.svg" type="image/svg+xml" width="64px"><span property="schema:name" content="Linked Research logo"></span></object>
                    <hgroup>
                        <h1 property="schema:name">Linked Research</h1>
                    </hgroup>
                </header>
                
                <div datatype="rdf:HTML" id="content" property="schema:description">
                    
                    <section id="articles" rel="schema:hasPart" resource="#venues">
                        <h2 property="schema:name">Articles</h2>
                        <div datatype="rdf:HTML" property="schema:description">
                            <p>Stuff</p>
                        </div>
                    </section>
                    
                </div>
            </article>
        </main>
<? include 'end.php'; ?>