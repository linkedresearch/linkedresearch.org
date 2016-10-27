<? $title = "Linked Research venues"; ?>
<? include 'top.php'; ?>

        <main>
            <article about="" typeof="schema:Article">
                <? include 'header_small.php'; ?>
                
                <div datatype="rdf:HTML" id="content" property="schema:description">
                    
                    <section id="venues" rel="schema:hasPart" resource="#venues">
                        <h2 property="schema:name">Venues</h2>
                        <div datatype="rdf:HTML" property="schema:description">
                            <p>Here we maintain a list of any or all academic publication venues which have a positive attitude towards one or more Linked Research princples. We also link to the personal sites of individuals who publish Linked Research.</p>
                            <section id="conferences-and-workshops" rel="schema:hasPart" resource="#conferences-and-workshops">
                                <h3 property="schema:name">Conferences and workshops</h2>
                                <div datatype="rdf:HTML" property="schema:description">
                                    <h4>Name</h4>
                                    <p><em>Year(s), discipline</em></p>
                                    <p>Short summary description of good stuff, ie. open access, open reviews, accepts HTML submissions.</p>
                                </div>
                            </section>
                            <section id="journals" rel="schema:hasPart" resource="#journals">
                                <h3 property="schema:name">Journals</h2>
                                <div datatype="rdf:HTML" property="schema:description">
                                    <h4>Name</h4>
                                    <p><em>Year(s), discipline</em></p>
                                    <p>Short summary description of good stuff, ie. open access, requires data to be published openly, open reviews, accepts HTML submissions.</p>
                                </div>
                            </section>
                        </div>
                    </section>
                    <section id="people" rel="schema:hasPart" resource="#people">
                        <h2 property="schema:name">People</h2>
                        <div datatype="rdf:HTML" property="schema:description">
                            <p>in the wild</p>
                        </div>
                    </section>
                </div>
            </article>
        </main>
<? include 'end.php'; ?>