<? $title = "Linked Research articles"; ?>
<? include 'top.php'; ?>
        <main>
            <article about="" typeof="schema:Article">
                <? include 'header_small.php'; ?>
                
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