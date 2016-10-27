<? $index = true; ?>
<? include 'top.php'; ?>

        <main>
            <article about="" typeof="schema:Article">
                <? include 'header_large.php'; ?>
                
                <div datatype="rdf:HTML" id="content" property="schema:description">
                    <ul id="parts">
                        <li>
                            <i class="fa fa-3x fa-universal-access"></i>
                            <h3>Publications</h3>
                            <p>Publish your research in a space you control, on your own terms. You do not need permission to make your work accessible to all.</p>
                        </li>
                        <li>
                            <i class="fa fa-3x fa-anchor"></i>
                            <h3>Unique Identifiers</h3>
                            <p>Create unique identifiers for everything you think is important, from data objects to sections of prose, so others can refer to and reuse them.</p>
                        </li>
                        <li>
                            <i class="fa fa-3x fa-link"></i>
                            <h3>Reusability and Links</h3>
                            <p>Reuse and link to other research and data so nothing goes to waste or is reinvented. Keep a machine-readable trace of inspirations and derivations.</p>
                        </li>
                        <li>
                            <i class="fa fa-3x fa-bullhorn"></i>
                            <h3>Announcements</h3>
                            <p>Publicise your work so that individuals, organisations and software can discover it.</p><p><a href="articles.html">Here's ours</a></p>
                        </li>
                        <li>
                            <i class="fa fa-3x fa-comments-o"></i>
                            <h3>Feedback</h3>
                            <p>Have an open comments policy so that anyone can review and generate discussion around your work.</p><p><a href="faq.html#how-to-reply">We do</a></p>
                        </li>
                        <li>
                            <i class="fa fa-3x fa-gift"></i>
                            <h3>User experience</h3>
                            <p>Create great UX for your readers. Consider tailoring how you present your work to different audiences and contexts, adding interactive elements and digital and print views.</p>
                        </li>
                        <li>
                            <i class="fa fa-3x fa-fire"></i>
                            <h3>Question current practices</h3>
                            <p>Reject information silos, paywalls, academic box-ticking, and archaic and artificial barriers. Be the change; publish your research with an open license, and openly review the work of others.</p>
                            <p><a href="venues.html#people">You are not alone</a></p>
                        </li>
                        <li>
                            <i class="fa fa-3x fa-plug"></i>
                            <h3>Help and motivate</h3>
                            <p>Encourage others to practice Linked Research. If you run a journal, conference or workshop, accept online, Web-friendly and interactive submission; publish your proceedings with machine-readable data; open up the review process.</p><p><a href="venues.html">Who is doing this?</a></p>
                        </li>
                        <li>
                            <i class="fa fa-3x fa-puzzle-piece"></i>
                            <h3>Resources</h3>
                            <p>Tools, techniques and resources for Linked Research are under ongoing development, and many venues are moving towards accepting work in non-traditional formats.</p><p><a href="resources.html">Find out more</a></p>
                        </li>
                    </ul>
                    <section id="what-is-this" rel="schema:hasPart" resource="#what-is-this">
                        <h2 property="schema:name">What is this?</h2>
                        <div datatype="rdf:HTML" property="schema:description">
                            <p>Linked Research is an initative, a movement, and a manifesto. We believe that scholarly communication is stunted by current academic publishing practices, and we aim to promote change for the greater good. This is not something hypothetical or may happen in the future, it is completely possible with today's technologies. A cultural shift is all it takes, and Linked Research is here to bring together like-minded people who want to push this forwards.</p>
                            <p>Linked Research is not biased towards any particular tool or technology; we understand that different researchers and disciplines have different needs and desires around scholarly communication. We encourage the use of any technologies that comply with the Linked Research principles; we tend to find Web technologies work really well for this, but we'd love to hear about how you do it!</p>
                        </div>
                    </section>
                    <section id="join-in" rel="schema:hasPart" resource="#join-in">
                        <h2 property="schema:name">Join in</h2>
                        <div datatype="rdf:HTML" property="schema:description">
                            <p><strong>Join the chat</strong> to get involved and help to push this initiative forward. Share your ideas, efforts, struggles and solutions. What stops you from publishing Linked Research? What challenges have you encountered? What examples of Linked Research are there in your field?</p><p><i class="fa fa-comments-o"></i> <a href="http://gitter.im/linkedresearch/chat">Gitter</a> <i class="fa fa-hashtag"></i> <a href="irc://irc.freenode.net/%23linkedresearch">IRC Freenode #linkedresearch</a> <i class="fa fa-twitter"></i> <a href="https://twitter.com/Linked_Research">@Linked_Research</a> / <a href="https://twitter.com/hashtag/LinkedResearch?src=hash">#LinkedResearch</a> <i class="fa fa-github"></i> <a about="" rel="doap:repository" href="https://github.com/linkedresearch">Linked Research</a>.</p>
                            <p>This website is here to aggregate relevant <a href="articles.html">articles</a> by the self-identifying Linked Research community, and from around the Web. We also list <a href="resources.html">tools and techniques</a> for making your research more accessible, <a href="venues.html">venues and platforms</a> who are accepting and promoting work which meets our principles, and <a href="venues.html#people">examples</a> of Linked Research in the wild. If you have something to include, we'd love to hear from you: let us know in one of our chat channels, send an inbox notification to the appropriate article, or make a PR on github to add yourself.</p>
                        </div>
                    </section>
                </div>
            </article>
        </main>
<? include 'end.php'; ?>