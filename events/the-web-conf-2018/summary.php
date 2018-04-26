<? $title = "Linked Research at The Web Conf 2018"; ?>
<? include '../../top.php'; ?>
    <main>
      <article about="" typeof="schema:Article">
        <h1 property="schema:name"><?=$title;?></h1>

        <div datatype="rdf:HTML" id="content" property="schema:description">
          <section id="rcsc-summary" rel="schema:hasPart" resource="#rcsc-summary">
            <h2 property="schema:name">Summary</h2>
            <div datatype="rdf:HTML" property="schema:description">
              <p>The <em>Researcher-Centric Scholarly Communication</em> workshop (aka #LinkedResearch) workshop took place at <cite>The Web Conf</cite>, on 24th April 2018, from 09:00 to 12:40. We had seven invited talks, and the session attracted around 30 participants.</p>

            </div>
          </section>

          <section id="rcsc-participants" rel="schema:hasPart" resource="#rcsc-participants">
            <h2 property="schema:name">Participants</h2>
            <div datatype="rdf:HTML" property="schema:description">
              <ul>
                <li><dfn><abbr title="Sarven Capadisli">SC</abbr>: Sarven Capadisli (chair)</dfn></li>
                <li><dfn><abbr title="Dame Wendy Hall">WH</abbr>: Dame Wendy Hall (chair)</dfn></li>
                <li><dfn><abbr title="Tim Berners-Lee">TBL</abbr>: Tim Berners-Lee</dfn></li>
                <li><dfn><abbr title="Antonis Loizou">AL</abbr>: Antonis Loizou</dfn></li>
                <li><dfn><abbr title="John Domingue">JD</abbr>: John Domingue</dfn></li>
                <li><dfn><abbr title="Chris Hartgerink">CH</abbr>: Chris Hartgerink</dfn></li>
                <li><dfn><abbr title="Daniel Schwabe">DS</abbr>: Daniel Schwabe</dfn></li>
                <li><dfn><abbr title="Henry Story">HS</abbr>: Henry Story</dfn></li>
                <li><dfn><abbr title="Christine Chichester">HS</abbr>: Christine Chichester</dfn></li>
                <li><dfn><abbr title="Eric Prud'hommeaux">EP</abbr>: Eric Prud'hommeaux</dfn></li>
                <li><dfn><abbr title="ELisabeth Lex">EL</abbr>: ELisabeth Lex</dfn></li>
                <li><dfn><abbr title="Hanna Cwiek-Kupczynska">HC</abbr>: Hanna Cwiek-Kupczynska</dfn></li>
                <li><dfn><abbr title="Hideaki Takeda">HT</abbr>: Hideaki Takeda</dfn></li>
                <li><dfn><abbr title="Giacomo Gilmozzi">GG</abbr>: Giacomo Gilmozzi</dfn></li>
                <li><dfn><abbr title="Claudia H Gutierrez">CG</abbr>: Claudia H Gutierrez</dfn></li>

                <li><dfn><abbr title="??">LH</abbr>: ??</dfn></li>

                <li>??: </li>

                <li>... we didn't take names, so if you're missing <a href="https://github.com/linkedresearch/linkedresearch.org">PR to add yourself</a> or contact <a href="https://rhiaro.co.uk/">rhiaro</a> or <a href="http://csarven.ca/">csarven</a></li>
              </ul>
            </div>
          </section>


          <section id="rcsc-transcript" rel="schema:hasPart" resource="#rcsc-transcript">
            <h2 property="schema:name">Complete transcript of talks and discussions</h2>
            <div datatype="rdf:HTML" property="schema:description">
              <section id="hello-world" rel="schema:hasPart" resource="#hello-world">
                <h3 property="schema:name">09:00 — 09:10: Hello world!</h3>
                <div datatype="rdf:HTML" property="schema:description">
<p><strong>SC</strong>: Good morning and welcome. This is along the same theme as other Linked Research workshops we started last year at ESWC. A lot of thematic overlap, but this year it's more focussed on how we get researchers to have more control over the contributions that they make in any aspect of scholarly communication.</p>
<p>All the talks are invited talks, no peer review.</p>
<p>There's a summary or article for each presentation; they're archived and link to the authors' websites.</p>
<p>Time for the talks includes question. We can be casual about when the breaks are, and have more questions at the end.</p>
<p>The theme is really to find out what the core characteristics of enabling a web space that puts the researcher in the centre.</p>
<p>Eventually we'll publish these notes on the website.</p>
<p>If you want to tweet, please do. Hashtag is #LinkedResearch.</p>
<p>It would be nice to have lunch together, this is only a half day workshop.</p>

<p><strong>WH</strong>: It's exciting to be here! Back in Lyon with a full conference and a real buzz about WebConf this year. This is just as important as it was 29 years ago. As Sarven said, we have been trying to open up scholarly communication for about 30 years. Every since the Web was invented.</p>
<p>I worked with Stevan Harnad who wrote his subversive proposal in about 94/95. He wrote a proposal that said we've got this amazing platform called the Web, we can all put our publications on it, we can self publish and peer review and link it all together, and it won't cost anything.</p>
<p>That was 30 years ago and the story has been amazingly complicated.</p>
<p>Market forces are strong. People want to defend their companies. They employ people and have shareholders, and we understand that, but I find it so hard to believe that here we are in 2018 still struggling to create a global repository of scholarly comms that's all linked up.</p>
<p>The physicists were there before us, that's what Stevan knew. The physicists were already putting their preprints onto the system through the Web. Nobody ever used a physicist for putting a preprint online. The arXiv flourishes, and the journal community still flourishes.</p>
<p>We've somehow got into a world where we pay the publishers thousands of $$ to publish in a hybrid journal, sometimes several times. It's mad!</p>
<p>We don't yet have a community where everything is available in a preprint format and an official format. We don't have somewhere we can search and link with this amazing new 'Linked Data'.. We don't have a global repository. Doesn't have to be centralised, we all know it can be distributed, we know how to make this stuff work, but it's about winning hearts and minds.</p>
<p>Here we are at this workshop saying let's get this vision again. That's why I've backed Sarven. This is the biggest one of these we've had. This is about how we as a community persuade people that this is the right thing to do, and we can avoid paying lots of money .. I'm saying this as the chair of a conference committee that makes you pay lots of $$.. but we try to ensure throughout .. I'll tell you a secret, although we have gone for many years with the ACM, to publish the proceedings. There are some costs on putting lots of papers up in a format everyone can see. They're about as green as you can get without being totally green. We have a special deal with the ACM that let's us put the conference proceedings up and we have stuck with the principles of open publication for this conference since the first one in 1994. I could talk forever about this, I've had my couple of minutes. I just want to say I'm excited to have everybody here, we have an opportunity now to really make this work. Computer scientists are beginning to use arXiv, the ACM are encouraging preprints. It's about getting peoples' mindsets over. We absolutely have to have peer review. It has to be organised, self organising takes a lot from the community. We will all benefit if we have an open access repository of Linked Data of scholarly communication. It will benefit the world enormously</p>
<p>Thank you Sarven for all you've done.</p>
<p>Tim doesn't need any introduction..</p>
<p>If you do not wish to be scribed, please ask to be off the record when you speak!</p>
                </div>
              </section>


              <section id="researcher-centric-solid" rel="schema:hasPart" resource="#researcher-centric-solid">
                <h3 property="schema:name">09:10 — 09:40: Building a researcher-centric world on the user-centric platform, Solid, Tim Berners-Lee</h3>
                <div datatype="rdf:HTML" property="schema:description">
<p>Hi everybody, thanks for coming. Welcome. I put these slides into a meetulator, an organisational thing yesterday...</p>
<p>All this is RDF of course (demo-ing meeting management system). The easiest way of doing I've found is to use Solid.</p>
<p>This is an SVG, when you find it on the Web you'll be able to read it better.</p>
<p>Let me tell you about what Solid is.</p>
<p>It's an attitude towards the social control of data. We use read-write technology to separate the apps from the data source. The data source have a common API. Instead of the Facebook, the Twitter, strava, Easychair APIs, we say anybody who builds apps that use Solid they will use this common API. That socially has the effect that when you download a new app it says to you hey where do you want this data? You can say these are notes I'm taking so I'll put it in the Solid store I have at university. Or these photos are personal, so I'll keep them on my home server, I'm responsible for backing that up. It's identical from the apps point of view, the API is the same, but from my point of view I can be responsible or my work is responsible for maintaining it. There are reasons for having more than one personal datastore. Personal cloud is not new. You could use Dropbox.. Maybe Dropbox will implement Solid.</p>
<p>The Web we had originally a big green block in the middle of the architecture diagrams. A lot of these specs are .. the lower part are just Web, HTTP, things we already know. RDF, SPARQL. You can read form these things like a file system. it's a bit like WebDAV except if you have a file in there that's an RDF file you can query it like a database. The way that programs work is that as the user is modifying things then .. the user of the app uses some sort of stack of code which goes through a number of things we've built in Solid. These things are based on angular or react, we have some common code in libraries (that you can help us maintain!) to do authentication, there's rdflib.. There's a bunch of code you don't have to write when you build the app you can use libraries for various different levels. We have our own Solid UI stack but you don't have to use it. it's got Panes - an applet that drives a particular type.</p>
<p>The idea about the server, you can certainly help on GitHub(node-solid-server) you can install it and use it or help us maintain it. You can install it in a mode where it's a server just for you, or a server which will allow whoever you like to get their subdomains. You might be running on mycool.stuff and your family members will get Alice.mycool.stuff and bob.mycool.stuff. You can go to solid.community and get yourself a subdomain of that and try it out. Talk to us on gitter if it's not working.. some of this is fairly new stuff.</p>
<p>For example this thing (on screen) is a meeting. Anybody remember the tabulator? There is some tabulator code still in this somewhere.</p>
<p>It's all about read-write with tabulator. Turning the web of Linked Data into read-write. You've got various views.  You can look at the turtle and even edit it. It's all understandable if you like turtle. If you don't, you can still look in different serialisations.</p>
<p>This app is a Solid app, called meetulator. I use it for managing my stuff about meetings. If I want to add something to my record about this meeting. This is all public. I can add a sharing pane which allows me to control the access. This is the access control pane, I have full control over it. This is the standard Web Access Control (WAC) system. This is a pane (scribe's note: pain?) that allows you to change the access control.. you can drag people.</p>
<p>This is me, represented by my URI (<a href="https://www.w3.org/People/Berners-Lee/card#i">https://www.w3.org/People/Berners-Lee/card#i</a>). If I drag it into a new tab it will go and... broken... it loads my URI. When you're developing the thing to do is ... the way we're trying to write the code, the libraries, is to get people to follow tracks about people, from a person to their friends, from a person to the paper's they've written. To think of the graph.. thinking about the objects rather than thinking about the underlying RDF statements. This is what I think is good RDF programming.</p>
<p>If I drag myself onto the conference it creates a group of attendees, with me in it. Now I can drag other people in.</p>
<p>If I go to the chat, you can't contribute to the chat unless you get yourself an account somewhere. Even though this is public people have to get an account. If you haven't logged in you get a login button, then you can come back and participate. but you're now revealing your WebID.</p>
<p>The WebID is a big part of Solid. I still take it for granted, but some people out there are still wondering about just getting everyone to have WebIDs, government issued, university issued, we can accumulate these and do things like add all the people who signed in to the chat.. I can automatically give access to the workshop now I've picked up all the attendees and close it off so that only the attendees have access. Then people can drag in all their photos, if you drag in a photo it makes a collection of pictures. I take a lot of photos and people ask what's going to happen to them, and I say I'm waiting for the semantic Web app that lets me put them up and make them only public if everyone who is in them agrees to be public.</p>
<p>This was a general introduction and diving in to the recording of this meeting using Solid.</p>
<p>There are different widgets, different panes out there. The way to take this sort of thing into research is to start writing panes for research objects, like experiments and publications. You may have ontologies for them now. A quick way is to write forms for this stuff. you can generate forms from RDF Shapes. Write a Shape about what's important, generate a form, eg. for a submission system. If you have a Solid server you can get people to make their own submissions, build a submission system and a review system around that. Like Easychair, by the time you come next year I want to see a Solid version of Easychair. It's not rocket science. The logic has all been worked out. It's just a series of panes, think about each one, what would that look like in RDF. You have tools to convert between them.</p>
<p>That's how I'd like us to do our researcher centric scholarly communication.</p>
<p>Questions?</p>
<p>By the way, other people who know about this, *points at Ruben* has been recently deeply immersed in the Solid architecture.</p>
<p>Q&amp;A:</p>

<p><strong>AL</strong>: You can create all these RDF documents, is there a way to merge these things, integrate from more than one file?</p>
<p><strong>TBL</strong>: Absolutely, you can merge it by .. one of the goals is for example I should be able to store photos in any event, so yeah..</p>
<p><strong>AL</strong>: You can SPARQL on top of all the RDF files?</p>
<p><strong>TBL</strong>: At the moment we don't have a SPARQL endpoint, we have this open as a feature request. This stuff is on timbl.com which is sitting in my house. I just use it for my stuff and family stuff. But workers and coworkers have PODS, when you want to integrate data and say pull all the data from every event you've been to, there's a list of events, I can pull each one and the go and find all the slideshows and pull them in and all of the pictures. So I may find that a lot of them are stored on the same machine. If they had their pods on the same domain, a feature we may be able to offload to a query across all those pods, but at the moment we have to query each one. The integration is all done in the client, in the JS.</p>
<p><strong>JD</strong>: My question is quite general. I spent a lot of my time evangelising to the senior folks at the Open University. As I understand Solid is about having more local control over your data. What's the message to the non technical people? To what extent should they be learning?</p>
<p><strong>TBL</strong>: There are a bunch of ways.. you can say if you want to be able to enable your university you provide a Solid server for everyone who joins. Then you start a habit of instead of just asking the IT department to produce another little app, get them to produce an open source app. An app for who is doing seminars, who is TAing, as you make these things you find that you become part of a community of other people out there. It's the sort of thing you ought to give to every student, they all get an email address, now they all get a web space. It looks at some levels like a file system. It's like giving them a disc. By separating the apps and data, the university can develop really cool open source apps, and all the time they don't have to do any backend work. All the IT people who write PHP might be miffed, unless you're writing a PHP Solid server..</p>
<p><strong>CH</strong>: How about the central point of communication between scholars and the publication? So far this is all about conferences, what you've talked about so far. How does the central publication fit in here?</p>
<p><strong>TBL</strong>: this is just one Solid app. What I'm pushing is the whole Solid world. I use it for all kinds of stuff, for doing my taxes for about 10 years. I haven't written already, sorry, the ultimate research tool. You need to imagine what the perfect one would be like.</p>
<p>?? from Chile: I love the framework. I'm also evangelising.. How have you thought about disambiguation, authoritative data sources in this framework?</p>
<p><strong>TBL</strong>: That is really important. Typically the essential answer I suppose is being aware of which sources are reputable and which aren't. If I go to that list of all the meetings and I dereference them all I'll find patches of linked RDF across the web which I and people I trust, it's calibrate,d if I pull in all the pictures and slideshows and meetings that I've gone to, I've pretty sure they'll all be pictures I'm interested in. if I were to do a general crawl of all of the Web and look at every single piece of RDF, I'll get a lot of junk. Not useful or not true. We're using links. When you make a link from one thing to another to a certain extent that there's a trust thing going on. You're inviting the people reading your thing to read the data you're pointing to. Suppose you do aggregate all of the conference materials, all of the LD dogfood for conference proceedings, if you start just pulling in data in general then you need to put systems in place which will look out for unreliable data. Down the road you have to spot spam as well. In general when we write systems we need to write rules about pulling in data, we need to get used to writing rules which think about why should I trust each thing I pull in, and then we can discuss those trust rules.</p>
<p><strong>WH</strong>: You threw out two great challenges at the end of your talk. One is tactical, one is strategic. Tactical - we need a solid version of easy chair. That really hit home. Easychair is getting very expensive. The question is tactically do we start again, as a community, and write our own version or do we go to the people who do Easychair and negotiate.</p>
<p><strong>TBL</strong>: people say isn't solid going to be really bad news for Facebook down the line? How will you get Facebook to agree? .. We're not asking Facebook. We're just doing it. Just do it quietly. Don't infringe on their IPR. Don't copy their code, be inspired by their vocabulary, to a certain extent the same UI language, but you take that and pull in the semantic web, the Solid UI widgets.</p>
<p><strong>WH</strong>: I could potentially make that an IW3C2 project. We shall see. The second point is the most important thing about Solid is that everyone has a  WebID. From a Web Science point of view what does that mean in 10 years time? What will go wrong with that? When we looked at Web Science we looked at what did we not foresee in the first web. Can we start doing that type of thinking now, with Solid.</p>
<p><strong>TBL</strong>: Thinking about 10 years down the line is interesting, we can't do it immediately now. The problem we have is, the 404 problem is obviously massive. When we started w3.org cos I was in charge I said no URL in w3.org ever goes away. You can deprecate it, you can change the access control, you will never reuse a URL for something else. timbl.com, same thing. This URL in 10 and 20 years it will still be working.. in 100 years maybe run by some museum. Very few people/organisations take the effort of thinking down the line. One of the things we will be doing that's different is, at the moment you have to get a domain name, down the line we will be sharing domains, and replicating things across domains.</p>
<p><strong>WH</strong>: how do you stop people stealing someone's WebID? Or making fake WebIDs?</p>
<p><strong>TBL</strong>: You'd have to steal someone's private key.</p>
<p><strong>WH</strong>: That's a technical answer.. most people in the world are not going to understand that... let's take this offline.</p>

<p><mark>INTERLUDE (Henry, Sarven, and Tim up on the podium)</mark>: How many computer scientists, including inventor of Web, does it take to work the projector?</p>
                </div>
              </section>


              <section id="epistemology-in-the-cloud" rel="schema:hasPart" resource="#epistemology-in-the-cloud">
                <h3 property="schema:name">09:40 — 10:00: Epistemology in the Cloud, Henry Story</h3>
                <div datatype="rdf:HTML" property="schema:description">
<p>Slides and paper: <a href="http://bblfish.net/blog/2018/04/21/">http://bblfish.net/blog/2018/04/21/</a></p>

<p>Thank you for inviting me. I've been working on lots of parts of Solid for a long time. I study philosophy intially, I did computing when I was 13 and I studied philosophy, then back to computing, then back to philosophy when I discovered the Semantic Web. I worked on the LDP part, security part, WebID part, read write part. Doing a PhD in Southampton now.</p>
<p>Some people might not have the background, the problem with explaining Solid is explaining why you need this. This is what philsophy is best at. Why do we need decentralised computing?</p>
<p>I'll start with epistemology. What is knowledge? It started with Plato asking this question in Athens. Asking citizens do you even know what knowledge is? Taking a step back and asking about the concepts. He came up with if you know something if you believe it, it has to be justified. About 2000 years of discussions, and I want to go straight to a 1981 improvement by Nozick in Philosophical Explanations, the third definition is this modal logic definitions. If it weren't the case that P then you wouldn't believe that P. This type of explanation only made sense because modal knowledge in the 60s and 70s became coherent, mathematised.. the most interesting thing for us now is the counter-factual part of modal logic. 'fake news'. how do you explain if kangaroos had no tails then they would topple over, what are the truth conditions of these types of statements. Neighbourhood semantics. In all possible worlds, they have a distance relationship, some are closer than others. In category theory there are ways of explaining this, this is part of my thesis.</p>
<p>What does it mean when you say if kangaroos had no tails they would topple over. In the closest possible world in which kangaroos have no tails, then if they topple over it's true.</p>
<p>What's the point of that? He's trying to deal with skepticism. The problem of skepticism is.. how do you know that you're not a brain in a vat? That the aliens haven't come and made you think that you're listening to this conversation. There's no way you can exclude that possibility. If you think of knowledge as excluding all possibilities incompatible with your belief. If you can't exclude this, how do you ever know anything? We have this problem in security circles, if you don't know something is secure against all attacks, you can't be secure about anything, a system can always fail. A whole bunch of films about this, Matrix..</p>
<p>When we say things like I have 5 pounds in my pocket, I know it because if I didn't have 5 pounds in my pocket it's not because the aliens are kidnapping me, it's probably because I spent it on a coffee. I can track the truth of that. We keep a system in our mind to keep track of where we are in the world. Perhaps this is a solution. We can know, according to Nozick, things about the everyday world, even if we can never exclude the possibility of aliens.</p>
<p>So we can relax right?</p>
<p>But what if they did come?</p>
<p>What would you do?</p>
<p>You might want to go to the gym according to this ad.</p>
<p>Henry's going crazy here, right. But this might be a situation we could be in?</p>
<p>We are externalising our memories on computers, in the cloud. That's where the aliens are coming from. The cloud is not in our hands, it's in aliens' hands. It's' so easy to change information in the cloud, on a computer which you don't have control over. In ancient Greece if you wanted to change the law you had to hammer it in the wall, hard to do that without anybody noticing. But now it would be quite easy.</p>
<p>You might think I'd remember what I wrote and I'd notice this. But large organisations, there's a whole theory about how they come to be. Started with families and clans. Moved to larger organisations, like cities to states, came with the ability to read and write laws and have externalised memory. Requires it to be able to cohere.</p>
<p>The Leviathan itself is composed of externalised memories. Like telecoms companies when you call them they know you've done something because it's in their computer. You can call anyone and they'll keep track of what you talk about, what you've done. Made up of lots of people who use this externalised memory.</p>
<p>So if you want to make sure that aliens aren't going to take over your brain, you need a server at home. A box with an open operating system so that you know that people aren't coming and changing your data. If your computer can control your home.</p>
<p>This is what Eben Moglen spoke about, author of the GNU public license. FreedomBox operating system. It hasn't yet got there. Why is that?</p>
<p>What's missing?</p>
<p>It's not the internet, it's not the Web. The problem is the data silos, they're not using Linked Data. In the world of the browser, I can use any browser to look at any webpage. Yet in the world of applications, the application only works with the data provider.</p>
<p>So what Tim is suggesting with Solid, the first hypertext application is just the first of a whole series of apps.. every application on the operating system is transformed into a hyper app. An app can be written in general to be able to read data, without being tied to a specific domain. I should be able to point this app to my web server, to your freedombox, and it can get going with reading and writing.</p>
<p>The stack - at the bottom, an open operating system. On that, a social Linked Data server, a Solid server. Contains a whole bunch of standards.</p>
<p>This creates all of these servers that people have at home, or schools, police, have in their high security rooms... each of these forms a Linked Data web with text, HTML, CSS, Linked Data, pictures, videos. The human being interacts through the human interface for reading and writing. Most people are interacting with the apps using these hyper apps which means we need libraries in the browser to be able to be efficient at reading and writing and creating users interfaces (I've been using React). Above that, we have the social layer. People using these apps are creating relations with each other. Going to meetings, putting coursework online. The whole point of the web is to have different nodes be able to link to each other in an open way. I forgot access control, that's really important.</p>
<p>Above that, you have institutions, the Leviathan. Composed of army, schools, universities. you have individuals using these apps that are working within organisations and across organisations. This is where I want to suggest we can already make an improvement by rethinking the web browser a little bit. This will help us deal a little bit with the fake news problem.</p>
<p>Currently when you go to a website you do not know, you can guess if it's a fake or real website. You can check the SSL certificate but that just verifies the domain. What's missing is a web of trust. What I suggest is that we use these institutions, the state, to create a new institutional web of trust, where the UK for example would have a root anchor of trust and have links to all the major institutions or databases for example. There is a database in the UK for companies. It would link to them and when you go to a website it can have a link to the government page saying this is the government linking to me and your browser could find this link and travel back to its root anchor of trust and say good, if you trust the UK government, then you can believe that they say this is a university or a company.. this is a news site, we don't know where it comes from but it's publishing  news. Then we can see it's a news organisation registered under American law. Browsers could go further and get more information, see who the owners are and what the share value is. You could see this being in the browser.</p>
<p>We could have an institutional web of trust that ties into the personal web of trust when we build these social networks. Technically that's not difficult it's just a question of will. Of getting a few nations coming together.. politically complicated but technically simple. Why are Amazon and apple so big? it's because they've imprinted in your mind through huge amounts of advertising that they're reliable. How can a small company do the same? you need to use the organs of the state to build the trust system.</p>
<p>Q&amp;A:</p>
<p><strong>DS</strong>: To me what you just described is more authentication than trust. Authentication is a first step to trust but trust goes further than that.</p>
<p><strong>HS</strong>: Authentication is.. we have public cryptography. No, here the trust is the trust that you have that a website is part of.. if you have a trust anchor and it's one that eg. a government has given out to all its citizens to add to their browser, they will be able to verify a certain amount of claims about what types of institutions you're linking to. This is a trust thing because you have a legal system which you can change if something goes wrong.. in the database if there's a mistake.. there's a whole system of many human being working together to help guarantee to you that this thing is working.</p>
<p><strong>AL</strong>: Assuming a benevolent government</p>
<p><strong>HS</strong>: that's why you have to be interested in politics</p>
<p><strong>DS</strong>: There are a lot of givens..</p>
<p><strong>WH</strong>: I don't think there's *only* a technical solution to fake news. We don't know what to trust from any of our governments. It's very difficult to know. One person's lies is another person's absolute truth. You can produce technical solutions that you can use to help people make a judgement. It comes down to who you trust.</p>
<p><strong>HS</strong>: You can say instead you trust the pope and use him as your trust anchor. If you don't trust anybody we're in the situation we're in now.</p>
<p><strong>TBL</strong>: As members of the scientific community, actually out there, it's easy to duck that by saying I'm not going to say something is absolutely true because I'll get in trouble, but you are members of the scientific community and part of a big process to figure out things that over the centuries we have decided are what we take as being the truth. Theories that seem to be useful and have not been disproven. There are certain things that science has decided are true until proven otherwise.. it's really really important. You shouldn't when you're designing systems. You shouldn't merely put aside the idea of truth of being something relative. Even though I may not have a good idea, you should always take absolute truth as being a direction, look for better theories. When things like evolution are challenged in the press, go out and fight them.. and fight against the things that are total bullshit. On a really important level.. there is truth and there is bullshit. Like the kids, you should 'call BS' as they say.</p>
                </div>
              </section>


              <section id="incentivizing-data-reuse" rel="schema:hasPart" resource="#incentivizing-data-reuse">
                <h3 property="schema:name">10:00 — 10:20: Incentivizing data reuse, Christine Chichester and Antonis Loizou</h3>
                <div datatype="rdf:HTML" property="schema:description">
<p><a href="https://datafair.xyz/">datafair.xyz</a></p>

<p>A marketplace for data. I'm going to talk about how we are dealing with some of the pain points data providers have.</p>
<p>You probably all know, I don't think this is revolutionary. Data reuse saves money. Looking at the cost of acquiring some data sets, up to 900$k just to acquire data. There's another paper about doing a 24 hour reacall survey, this one cost up to $2mil. Why not reuse that data once you have your answer from the first use?</p>
<p>It saves time. If you odn't have to regenerate the data it saves time because it's already there.</p>
<p>We all could agree that it's the ethical thing to do to reuse data. You don't want to do an experiment on laboratory animals a second time if you already did it once. That's not very ethical.</p>
<p>Some different initiatives out there, one called FAIR - Findable, Accessible, Interoperable, Reusable. Guidelines for providers. It's a lot of things to do. I would say oh my god, I'm a data provider, you want me to do all that? It's a lot of stuff for a data provider. It's not necessarily easy.</p>
<p>I'd be collecting the data and then I'd have a dataset. I'd have to follow those bazillion rules on the last slide, just to organise, describe and license my data just to put it in the data pool. That's a heavy burden, not necessarily the things I do. You're weighing me down with all those guidelines I have to follow.</p>
<p>Okay, say I put it in the data pool so someone can reuse it. Has to be transparency, and trust between the provider and the reuser. The reuser can do something with that data and put it back in the data pool. Usually involves time and effort to be able to put it back.</p>
<p>There's a lot of elements to this whole data cycle. We need to break down some of these elements so different people can do these things and that there are incentives to do so, and not weigh down the data provider. They won't do it. What are the incentives? Maybe you get a warm fuzzy feeling, but not everybody gets that.. I wish everybody did.</p>
<p>Different incentives for different people. My dog wouldn't go a step with a camo sweater.</p>
<p>It's not very motivating.</p>
<p>We try to help with some of these things.</p>
<p>Improving data exposure and promotion with nanopublications. We want to help these providers by using shareable persistent URIs. W're trying to instill the trust by making a communication channel between providers and reusers. opens the possibilities for collaboration. Putting in place the mechanism for communication. could be some market driven incentive. Right now if you're funded by NIH you're forced to do it, that's imposition. I don't know if forcing is a very good incentive. But there are other market types of incentives. Hopefully datafair can offer this. As well as the incentive that your dataset could be improved. There could be other reusers who pick them up and do this cleaning for you. And they have an incentive to do that because it's an activity that they can be rewarded for monetarily.</p>
<p>Nanopublications - this is how we are helping a data provider achieve a FAIR dataset, or achieve some of those objectives.</p>
<p>It's a formal way in RDF (three named graphs) to represent a small scientific assertion. We typically give the example of 'malaria is transmitted by mosquitoes'. One graph in the nanopublication, also a provenance graph, and also publication info about the specific publication info about the nanopublication as a whole.</p>
<p>In the case of datafair, what are we doing here? Assert that a dataset is published by a certain provider, has a license, a download URL, and was derived from a certain source.</p>
<p>The provenance for that assertion is that it was generated a certain time, attributed to a certain data provider, comes from a certain place.</p>
<p>The publication info is about the whole nanopublication, attributed to us because we add this when people put their data in our marketplace.</p>
<p>Also rely on something else. A trusty URI (Tobias Kuhn). Verifiable, immutable and permanent URIs. You have the URI, a module identifier, and a cryptographic hash. If you add this to indicate your nanopublication, you can then verify it, the hash is on the content of the nanopublication. If you find the nanopublication and the hash doesn't match, then you know that somehow it was corrupted or something happened. Nanopublications are supposed to be immutable anyway. You want to say malaria is transmitted by mosquoties, you find out it's not true, you write a new one and reference that it replaces the old one.</p>
<p>One trusty URI for the nanopub, one for the dataset itself.</p>
<p>Look up the nanopublication with the trusty URI.. look up the assertion, use the download URI in the assertion to find back the dataset.</p>
<p>What do we do with nanopublications?</p>
<p>Add them to the decentralised nanopub server network. About 12 physical servers, around the world. We upload them to the server network and they're propagated throughout so if a server is down you can still find it. The user who wants to use the nanopublication they can get them from the network. Doing some of these small things, and working through these guidelines for making data FAIR for the data providers is going to be an incentive as they don't have do it themselves.</p>
<p>The FAIR requirements can be delegated. datafair is taking over that. It doesn't complete all the guidelines but it is a start.</p>
<p>Also we're making communication channels so the providers can communicate with the reusers. The way we can instill trust is having people talk to each other. When you can talk to someone about the data they're providing you feel you can trust them.</p>
<p>When people reuse people benefit. They can do their cleaning activities, not everyone is adept at this. The people who are can reuse the data can clean it and they are rewarded when they put the data back into the pool.</p>
<p>These are the three ways we can incentivise people to make their data available.</p>
<p>Q&amp;A:</p>

<p><strong>EP</strong>: In the spirit of decentralisation, you could still participate in nanopublications if you're outside of your network. The degree to which you can get references.. when you have one nanopublication and you get another one that contradicts it, is there a forward reference or do you need a database query to get that? If you got your network of distributed databases, and other people are taking advantage of the decentralised nature of it and have their own nanopubs externally is there some convention for cross-referenceing so you can find the next version?</p>
<p><strong>AL</strong>: for the first part when it turns out that mosquitoes don't transmit malaria, you could have a nanopub where you assert that the other one is wrong. Or you can say that mosquitoes don't transmit malaria and rely on a third nanopub to say that this nanopub is more trusty than the other one.</p>
<p>When it comes to decentralisation, the servers exchange data between them so they're all on the same index. If you don't want to be part of this, but create nanopublications on your own machine, you can refer to any others in the network. If they descirbe yours, they can refer back to you. If you don't have immutable URIs that's breaking it.</p>

<p><strong>EL</strong>: There are certain repositories available like [figshare, zenodo, OpenAIRE ]. Do we build another platform where we store data, or is the idea we make these platforms like a common repository?</p>
<p><strong>CC</strong>: There are different platforms, and some of them have different goals. We're not building things for everyone to have their own, but different people need different incentives. On a lot of those you're forced to put your data. If you try to search it it can be quite difficult. Some of that data could also be put on our system where we help you with certain goals where we're making a connection. You can take someone's data and they don't know, it's impossible to get your stuff answered and work with the data provider. This is just a different way with different incentives.</p>
<p><strong>EL</strong>: In terms of citations, credit for scientists, is this on your agenda? When I do the effort to make a great dataset I want some scientific credit.</p>
<p><strong>CC</strong>: Nanopublications can be easily cited and referenced. There has been one paper that says data put out has a higher citation rate. It's quite low though. I've written a paper, most people will cite my data rather than my datasets. but nanopubs do offer a way to cite datasets.</p>
<p><strong>AL</strong>: There are different audiences. Some nice people will do a lot of this work to make data clean, but not everyone will. If you want to make me clean this up for you maybe you pay me. This monetary incentive reaches a much wider community than this citation issue.</p>
<p><strong>EL</strong>: We need to avoid being in this situation with publishers but for datasets where we have to pay loads of money for this data cleaning.</p>
<p><strong>CC</strong>: We're connecting providers directly with the reusers, there's no third party publishers in there</p>
<p><strong>TBL</strong>: One of the slides it said 'permanent', you said it's indexed by the search engines and it's there forever. But a lot of things get indexed and they're not there forever. But what you're actually saying is that you're putting it onto a set of servers that carefully store every nanopub. You're putting your trust in a particular community. Asking about long term.. this is cute for 5 years and then another technically cuter thing comes along, have you thought about the part .. do you have librarians and the internet archive lined up when this becomes less the latest cool thing, are you going to have a social arrangement, a trust, which will then keep these things alive?</p>
<p><strong>CC</strong>: I don't have anything lined up right now..</p>
<p><strong>EP</strong>: Everybody thought you can protect your identifiers with purl.org then it was down for 6 months... when you're positioning yourself in an ecosystem.. the juxtaposition between decentralisation and distribution is important. You need to emphasise that you're a component of this ecosystem, but you can participate in it externally as well. It's not mandatory that this system be there forever, and that makes it more secure.</p>
<p><strong>HC</strong>: This mechanism for cleaning data. Sounds tricky. How can you be sure that the person who takes the data and modifies it in a correct and right way so that it's not modified somehow more than necessary or changes something or the intention of the author. Any formal procedure so you can be sure?</p>
<p><strong>AL</strong>: How do you choose which of the ten listings of the same product you're gonna buy on ebay? Same answer. I clean some data and put it up for sale, people buy it or not, and review it. We rely on these personal dynamics. Someone is providing data for sale, interested parties can ask them questions. If the reuser trusts it enough.</p>

<p>>>>> COFFEE. Back at 1105.</p>
                </div>
              </section>


              <section id="blockchain-based-educational-certificates" rel="schema:hasPart" resource="#blockchain-based-educational-certificates">
                <h3 property="schema:name">11:00 — 11:30: Blockchain based educational certificates as a model for a P2P commons of scholarly metadata interaction, Lambert Heller</h3>
                <div datatype="rdf:HTML" property="schema:description">
<p>Thank you for inviting me. I will try to make the case that we have an issue with data ownership when it comes to review and general research assessment and stuff like that. I will try to make the case that blockchain is at least a very good candidate for delivering a solution to that. Before I dive into this question let me briefly point out that I'm not a web scientists but a that I work in an academic library. What I have mostly done in the past 5 years with my group (the Open Science Lab) is that we promoted and enhanced VIVO. Linked Open Data approach to current research information systems. We have a workshop coming up in Hannover in autumn.</p>
<p>To dive into this question. As you know, research assessment has many elements. one of the most atomic core elements is peer review. Many other instances where you give attribution that somebody made a small very particular contribution to a collaborative work, or kind of mutual assessments that happen all the time. We already know that we have a huge systemic issue with research assessment right now. Senior researchers who frequently serve their role on committees that decide on hiring, tenure, promotion, etc, very often rely on proxies for research assessment like the impact factor which is really damaging to research.</p>
<p>It's clear to me that a lot of this has to be addressed on a policy level. Please by the way make sure that your institution signs up to the San Francisco declaration on research assessment (<a href="https://sfdora.org/">https://sfdora.org/</a>) which points out that research should be assessed on its own merits and not on impact factor junk data.</p>
<p>My point is that this should maybe not only be addressed on a policy level, but also some level we should talk about here. This is .. let me first point out two very huge developments in the area of research assessment from the last few years. One thing is that since we have these Facebook style systems of scholarly profiles like ResearchGate who kind of won this game and maybe a little bit academia.edu we have mutual assessment of researchers at scale. There are millions of people on these services maintaining their own profile, do statements about attribution, etc.</p>
<p>This is very ambivalent. On the one hand it's interesting to see that finally the web itself becomes a platform for doing this kind of stuff. Mostly the individual researchers are in the driver's seat of that. Do this by clicking on things by themselves. On the other hand all of the data that you give ResearchGate is owned by this one company in Berlin. They don't have any open data policies, they don't follow any standards, they don't even allow you to download your own data and reuse it anywhere else. Just try.</p>
<p>We have an exciting development, ORCID. This is for one time a concerted effort of the big publishers and libraries, things like arXiv.org and so on to make sure that you can disambiguate between researchers, who is who and who did what.</p>
<p>There are issues with ORCID as well.</p>
<p>It turns out that ORCID relies mostly on data that is governed by big publishers. They have huge metadata qualitiy issues. They started "metadata 2020" to address this issue. This is not a pet problem for me as a librarian, but a real issue. If you want to have real discoverable reusable data, make sure that metadata is good quality. You need to set the incentives, and get researchers to take care of their own metadata in an easy way. ORCID really try to do something about this, many of the big parties involved, and allow researchers to go into their profile and change things> But only after the fact. The primary source is always what publishers do. This is a systemic problem.</p>
<p>An interesting situation. My hypothesis is that we have an issue with data ownership in this area. You can decide either you turn to ResearchGate or stuff like that which gives you the possibility to take care of your own data, then you have this one company sitting in Berlin owning all that data. Or you set your bets on ORCID, then you have open data but it's largely governed by big publishers. I hope you see the problem here? A problem with data ownership.</p>
<p>So now to something seemingly completely different. Clearly John Domingue and other people in the audience could be much better at explaining this than me.</p>
<p>About 2 years ago some people, MIT Media Lab and OU later, came up with an open standard for issuing educational certificates backed by blockchain. The idea here, briefly, it's like a student/learner setting up a profile, feels like setting up a profile on Facebook. Tim already mentioned crypto apps on your phone where you have a key pair, this is very common today. So you set up a profile which is a node on a peer to peer network, in the case of the OU the Ethereum network, and the next step is that you make a claim and you ask your learning institution to verify that claim. They are represented by another node on the same network and you have a transaction between these two. This is a timestamped transaction. This is stored on millions of computers worldwide almost instantly. There's a cost to it. It's not much but it's not for free. Once it is there, and this is very interesting, it is highly highly redundant. It's hard to imagine whatever happens to Ethereum in the future that this one proof completely goes away and is nowhere else stored. Maybe a global nuclear war, but this is really broadly distributed.</p>
<p>The neat thing is once you have this cryptographic proof it's up to you, the learner to decide whatever you want to do with it. You can decide to share this transaction and what's behind it with some potential employee. This is the magic of the blockchain based education certificate thing. it's highly portable and puts the learner's autonomy in the centre.</p>
<p>More general, three assumptions. Already great work being done about these learning centric portable educational certificates by macauthor foundation and Mozilla foundation - open badges.</p>
<p>We don't have to reinvent the wheel here. This is a semantic layer on this.</p>
<p>We have this covered with open badges, we have the semantic layer covered.</p>
<p>We have to established verifiable claims. As it turns out there is a w3c working group covering this.</p>
<p>And then we have, you should have closer look into, the concept of self-sovereign identities, also covered by a w3c working group. This idea of having an identity where you not rely on some third party. Maybe not even somebody who runs a server where some of your personal data is stored. It puts in focus the autonomy of being the owner of your personal data.</p>
<p>A footnote - have a look at Shermin Voshmgir's article about this. Shouldn't even call this self sovereign identity but individuals and their personal data, which you know from concepts like the EU privacy protection law.</p>
<p>What we have here as an option within the whole concept of self-sovereign identity is decentralised identifiers.</p>
<p>Here you have this more generalised concept I mentioned earlier, this idea of being free to join this peer to peer network for a modest fee. What is a really elegant and interesting point? It's not for free. Counter-intuitive. How can something be highly accessible but not for free. We assume that when something is really open it should be for free at the same time.</p>
<p>In this case it turns out that you have this high redundancy of your information in the network. Very few further economic or other dependencies. there is no particular server you have to rely on. No special relationship with some institution, university, government, which is presumed for this to work. This is a very core concept of a public infrastructure. The main idea of something like Ethereum.</p>
<p>So the other interesting thing is that we are here piggybacking on a larger development which is this growing ecosystem of things like blockchain.</p>
<p>We have these cryptowallet apps on your phone. Still lots to be done in terms of security and scalability. But still something growing and we can piggyback on this for things like educational certificates etc.</p>
<p>Also admit it, blockchain is over-hyped. Makes it so complicated to discuss this issue and what the benefits might be.</p>
<p>The perspective is to let every researcher make statements openly without any detours and without having to rely on any particular platform. That's the beauty of it. Just refer to some document (even a nanopub maybe) with its hash and make a transaction out of it.</p>
<p>The most simple thing you might do is give a statement about how you were involved in a publication.</p>
<p>I think this is a promising candidate for solving our quality issues with scholarly metadata as well. It sets straight the incentive structure of this whole thing. you don't have to rely on some editor where you are the corresponding author where you tell them who was involved and what is the right order. Then later it ends all in some aggregator and nobody takes care of what is there because it's just a brand name Springer and some fixed names. But actually people who were involved speak directly about how they were involved, to each other, without any detours.</p>
<p>From a business level perspective it's like levelling the playing field. From innovation theory they told us that with the WWW in the 90s it was all about being able to be innovative without having to ask anybody. This peer to peer characteristic of the WWW initially. Something of this is into this blockchain thing as well. It's permissionless innovation, that is to say there is nobody who has privileged access to the information stored on Ethereum.</p>
<p>Some of the ideas in these slides are covered in this article: <a href="https://bit.ly/blockchain-commons">https://bit.ly/blockchain-commons</a></p>

<p>Q&amp;A:</p>

<p><strong>HT</strong>: you mentioned ORCID. It's a mix.. one side is for publishers but also working for publishers. I think also an organisation can assert employment.. functionality .. what's the difference.. is automatic mechanism like blockchain better compared to ORCID?</p>
<p><strong>LH</strong>: That's a tough question. On a very basic layer you can make sure every researcher can set up their own decentralised identifier on the blockchain. And then you can have in an ideal world (just a vision) on top of that, have an organisation - like ORCID today - curating, taking care for a certain subset of these decentralised identifiers. For instance you can imagine asserting research institutions to their researchers, okay this decentralised identifier is in fact that person who works for our department. Then on top of that you can go up and build beautiful certification infrastructures, and have something like ORCID which takes care of profiles from a lot of institutions. But there's a layer of independence and having *ultimate* control that is removed from the organisation like ORCID.</p>
<p><strong>HT</strong>: So the blockchain is like a basic layer to make information trust? So some activity on top of such architecture. Yeah, yeah.</p>
<p><strong>LH</strong>: This is a huge achievement, ORCID in place, but it could be better if an individual researcher doesn't have to rely on them. It should be even possible to fork ORCID, why not. Why not say I get this it's a great effort, but there's some detail I would do other, and make your own ORCID fork. This would be easier with this vision in mind.</p>
<p><strong>CG</strong>: How do you integrate this with commercial management research systems like PURE or Converis which when they handle the vCards of their researchers?</p>
<p><strong>LH</strong>: First I'd like to point out if you consider working with PURE or Converis consider to switch to VIVO because this is free software which does the same but with LOD. We considered already in the VIVO community some activity around blockchain as well. Statements about what researchers do, and some link to a proof from a source, saying about metadata provenance. Where does a statement come from? Has something really been reviewed by timbl, you can check with an external source, where does it come from. It would not change so much something like PURE or VIVO, by their nature they are a showcase set up by an institution, but the assertions would be backed by data from different sources.</p>

<p><strong>TBL</strong>: It's useful to separate some of these things. Partly it's good idea to store things in Linked Data. Use VIVO and so on and where we need ontologies that VIVO doesn't cover we can have common ontologies. You can write down you took this course and got this grade. Digital signature, one of the things that Solid or DID will give you down the line is the ability to figure out which keys to trust when you see something signed. Whether it's signed by someone you trust. Signing Linked Data is important. Should be standard, should be in the libraries. I should be able to just write a piece of LD about you and sign it. It doesn't matter where you put it. Let's separate the signing with.. you have a link to the private key you'll never see, signing is really important. But putting it on the blockchain, a Solid server, send it by email - whenever you.. I know blockchain is very trendy at the moment, but you're postponing the question in a way. If you store this things on the websites of universities, what happens if all universities go away in the future? What happens when Ethereum becomes less cool? And your particular blockchain.. to maintain this system you have to maintain the blockchain. You have to rely on the people maintaining that blockchain. If the market crashes, you have no-one maintaining it before. or you're sharing the system with other crazy people who may not be academic. Kids use it for shooting each other on videogames.. hashing each shot, you're maintaining their bandwidth. It's not taken care of by divine presence, it's taking care of by a community that you're part of. I'd separate the idea of signing things with where it's stored. Signing Linked Data is valuable, separate from the blockchain. Signing it gives it the integrity. You don't have to put it on the blockchain.</p>
<p><strong>LH</strong>: Clearly these are two separate questions. What web infrastructure for sure. Maybe a question of where to put your trust in the long run. Institutions can put their trust behind something in the long run and they can make sure at least.</p>

<p><strong>JD</strong>: I agree with TBL. You have to differentiate between.. a blockchain is just a technology and it can sit anywhere. I'd be interested to see if you could implement functionality of a blockchain on Solid..</p>
<p><strong>TBL</strong>: We have a masters student doing this.</p>
                </div>
              </section>



              <section id="verified-shared-modular-research" rel="schema:hasPart" resource="#verified-shared-modular-research">
                <h3 property="schema:name">11:30 — 12:00: Verified, shared, modular research communication with the Dat protocol, Chris Hartgerink</h3>
                <div datatype="rdf:HTML" property="schema:description">
<p>Slides: <a href="https://bit.ly/webconf-chris">https://bit.ly/webconf-chris</a></p>

<p>This is work I'm doing with the Mozilla science lab. A psychologist by training, and an applied statistician. I'm approaching today with a meta point of view with a lot of the issues we have nowadays.</p>
<p>What we want to communicate most of the time is the empirical research cycle. In the article format we lose a lot of information. We lose data, predictions, code. We don't get recognition for it as researchers. We reconstruct the research cycle after the fact. People start fooling themselves, changing predictions based on results. That invalidates the empirical research cycle and we start cutting corners.</p>
<p>But if we look back and see how we communicate, we don't see if this is happening. this is a key issue.</p>
<p>Another aspect is that we do a lot of studies and we have a large set of studies. There are various reasons why studies don't get published. Not statistically significant or not consistent with the current worldview, etc, Ultimately looks like the entire world is a tiny subset of everything we could note.</p>
<p>In stats we have p-hacking which invalidates the publication cycle, and publication bias which greatly shrinks the amount of information we register.</p>
<p>Key steps of the scholarly comms system: registration. Certification is invalidated because peer review exacerbates human biases. If something is statistically significant it's seen as higher quality. Issues with awareness because of lack of access; archiving is done in a dark way. Take information and put it in a basement, when the publisher stops publishing the archives come out. We could use this infrastructure to support how we communicate on a day to day basis. We're only rewarding number of publications, number of citations.</p>
<p>A narrow definition of the functions right now. We fulfil them but we can do better.</p>
<p>When the Web happened this was a great opportunity to go back and think about how we communicate science. But what did we do? Put the article onto a screen and paywall it.</p>
<p>Before the Web publishers had a key responsibility to help us disseminate the papers. Equilibrium. But now we can ask do we still need the publishers to provide this infrastructure? The publishers will say yes, we provide servers you need the access, you can't just rely on any other scholar, but then when you actually start looking at the pages of the publishers, only 1/4 has https enabled. Sciencemag has no https but has a login form. A threat to the credentials of the users, and easy to manipulate the content being shown. A malicious actor in a hospital network can start altering all the doses. If you know about how to do MITM attacks you can start changing author names.</p>
<p>The Web is currently being reinvented. We had the re-decentralising the web conf at the internet archive last year. There are some very key new protocols coming out that change the game.</p>
<p>One is the DAT protocol which is a peer to peer protocol that has an append only log. It's being developed by code4science and society. What the DAT protocol does is an append only register. If you start a folder it contains nothing. if you add a new file this action is then cryptographically signed and it's added to the registry. If you then delete the file it's a delete statement in the register. What we see is a cryptographically signed append log of a folder. It's based on similar principles as the torrent network. The difference being that DAT has a persistent public address. Links don't change. End to end encrypted, cryptographically signed, peer to peer folders with stable addresses.</p>
<p>It has a 64 char hash as a public key to that folder. If you go to this hash you can view the contents. You're just viewing it off the peer to peer network, no specific dedicated web servers needed. Because it's an append only log we can go back in time and address specific versions of these publications. If we add version+3 we can go back to the version it was back then. We can be sure because of the signing that this is the content we are promised. And no MITM because it's end to end encrypted.</p>
<p>Beaker browser is making great progress. Decentralised web databases built on top of the DAT protocol. Some really cool specs coming up. Engaged in how to make this accessible to as many people as possible, also who don't have continuous access to the internet. Approx 50% of people in the world don' t have access.</p>
<p>Takeaways: check out these two projects. They are key to changes we'll see in the next few years.</p>
<p>We can have persistent p2p hosted webpages with end to end encryption.</p>
<p>Taking that to scholarly comms. We have textbooks which provide little detail but certainty of findings. We have journals with more detail and still certainty. What can we do now?</p>
<p>It's similar to nanopublications but a tiny bit different.</p>
<p>I was thinking about adding a layer - modules for now - that are highly uncertain but provide a lot of detail. We make the research cycle the thing we communicate. We split the different pieces of the research cycle and embed the chronology of the research cycle back into the way we communicate. Pieces start linking back to each other to provide provenance, and a network of these research outputs. We can be more granular in the way we contribute. Add one node at the very end, it's a data node, it's now a replication. The person being replicated gets recognised because that node is more important, and we incentivise someone who wants to replicate because all the information and materials they need are available and open. A replication is very unlikely to get published currently.</p>
<p>If we keep doing this we can start getting towards this network which we can do network analysis on. From a practical standpoint is very useful because we're now stuck with these bad metrics for researchers, so if we can start providing a more question driven way of evaluating researchers. Compute the density in a network. Add a module which connects two old modules. Spark our own creativity in creating new research. maybe you have to combine two pieces of code and you don't see how it would work but you can look at how it could work.</p>
<p>We fulfil the scholarly functions in a more broad way. We could register all findings. We don't select based on results, communicate as we go.</p>
<p>Improve certification because we embed the research cycle in the way we communicate.</p>
<p>DAT increases the option for awareness.</p>
<p>Archiving is improving the infrastructure .. start harnessing the resources of libraries to increase the bandwidth of users of the network.</p>
<p>Based on the network we can improve the reward function.</p>
<p>This is all possible today. DAT is there, beaker browser is there. Just need to build tools to make it user friendly and worthwhile.</p>
<p>Let's start out.. we do have to think that everything about centralised web services we now have we need to throw out the window.</p>
<p>Each user has their own module available, eg. Alice has a profile module. Alice's profile module can look something like this. Some metadata in there about Alice. With Twitter everyone goes to this one place.. in the p2p infrastructure we don't have this any more. If you have the profile you own it, all you need is a service to interface with that. If you don't want to see purple, you can go to this service that recalibrates all the information. This is a key aspect, the portability of information which we don't have with Facebook, Twitter etc, we also don't have with scholarly publishing. If Alice has a profile she can start looking at services to interact with the profile.</p>
<p>Alice has a set of links, bare minimum, of other profiles she follows, and of content she registers. The profile she follows is an unversioned link, so you keep getting this updates. But for the content, she can register a specific version, we see what she wanted us to see. Public private key allows you to update the versions. You can have collaborators via multiple keys.</p>
<p>One of these content modules is say a theory Alice comes up with - a folder on the p2p network which we add some information to. This is a scholarly module, the authors, the parent, the root, the main file. The mainfile can be code, data, etc. The modules are just containers for information. Everything we heard earlier about nanopub can be put in there as well.</p>
<p>Because it's append only we are sure of the content integrity and it's immutable. Without needing the blockchain.</p>
<p>Alice claims to have authored this piece of work. Does the piece of work also claim that Alice is the author? Then it's verified.</p>
<p>We don't have a central server we need to start crawling Alice's network. Alice is connected to Bob and has other pieces of information connected to her, which we can verify because the content refers back to her. We can go one level deeper in the network and see Bob is connected to Eve.. we can see Bob claims to be an author on something that he isn't if there's a one way verification. Or maybe he rescinded his authorship.</p>
<p>One layer deeper we can start expanding this network.</p>
<p>As long as my module is connected to someone else we can start crawling the network and start creating this adjacency matrix to start evaluating the information available.</p>
<p>This is something possible today. This already live on the DAT network, these modules. Quick demo..</p>
<p>This is one service that allows you to interface with this information. Enter a DAT link. <a href="dat://proto-chris.hasbase.io">dat://proto-chris.hasbase.io</a></p>
<p>Starts loading all the content in Alice's network. Click on a piece of content, we are taken to it. How do we shape the information we put into these modules?</p>
<p>We can also easily create a profile. Literally just click on it.. choose who to follow. Generates a public key on the DAT network.</p>
<p>You can install Beaker and try this out yourself.</p>

<p>Q&amp;A:</p>

<p><strong>??</strong>: you are using bit.ly as a shortlink.. I don't know how reliable that is. Real comment - difference between <code>data://</code> and <code>dat://</code> ? And how is topic of module?
CH: The researcher chooses what to put in the module. Because the network is open by design you can start crawling that information and provide new services to help discovery. We flip from selling access to information to selling services to help consume information, so researchers can look through everything</p>
<p><strong>??</strong>: you have little pieces and you can reuse them</p>
<p><strong>CH</strong>: Say you have a full research cycle in this way. At the end you can say take the text based modules an compile them into an article.</p>

<p><strong>JD</strong>: Relationship to publishers? You could take over and have the articles here as well. Are you thinking of working with any publishers or conferences?</p>
<p><strong>CH</strong>: A lot of these things have this zero sum decision. If you publish open access you can't publish in other journals. It could work if publishers wanted it to. It's a layer underneath. It's a social question we have to answer. I imagine there's pushback with publishers like we saw with preprints.</p>
<p><strong>JD</strong>: Are you changing citations?</p>
<p><strong>CH</strong>: You can still cite within a module, but there is a lot of improvement. how the modules are filled in is very important. Important to make citations at the client side. If you render the citations clientside you can start verifying, if you cite a module a researcher doesn't claim that article anymore you can automatically see that that has been rescinded. When you read it.</p>
<p><strong>SC</strong>: If we can get certification out of this as well and if you can self-register or self publish, what would the role be of the publisher? The third party? This allows anyone to register and we have the certification mechanism to make sure that it's a legit contribution.</p>
<p><strong>CH</strong>: One of the key things I think is going to be important is curation. For example say I want to know what you're recommending. Peer review journals have a large curation role. That oculd still be a role of publishers as they change with this.</p>
<p><strong>SC</strong>: Like overlay</p>
<p><strong>CH</strong>: Exactly</p>

<p><strong>TBL</strong>: With DAT I get the DAT software I can look up dat:// URLs who.. what is the community of people I have to rely on for that to work? Can you compare it IPFS and can you say to what extent is everything stored everywhere?</p>
<p><strong>CH</strong>: DAT uses sparser applications so you can just get the metadata about the files and request just a specific file. You can also do full replication. I think libraries could come in to provide persistent hosting or data repositories so that information can stay available on the network. Like torrents you need seeders. can we identify persistent seeders?</p>
<p><strong>TBL</strong>: If I use it for putting all my porn films on it how do you distinguish.. how does the community .. you have to spend your resources to make sure my porn films are available. What's wrong with this picture?</p>
<p><strong>CH</strong>: This is where curation comes in. Say a university wants to rehost all this content and just puts everything in Alice's network up to 3 degrees of separation. If you start hosting your porn outside of this network that library won't host it.</p>
<p><strong>TBL</strong>: Hosting is done by following links?</p>
<p><strong>CH</strong>: Yes. You can also blacklist some links.</p>
<p><strong>TBL</strong>: That is quite a large social arrangement. You're replacing the social apparatus, ResearchGate, algorithms with software.</p>
<p><strong>CH</strong>: I agree that sometime the content will be too big, so we need a way to curate this and it's a social problem we need to tackle.</p>
<p><strong>TBL</strong>: A lot of it is about establishing a large community of people who will promise to look after it for a long time, and they only have to look after the things they</p>
<p><strong>CH</strong>: It lowers the cost to get started with it cos you just need the dat link.  By iterating across these use cases you can start finding out how these use cases work.</p>
<p><strong>LH</strong>: What do you think about tokenisation of network resources? In related communities, IPFS has this popular content of being incentivised by receiving a token for giving up some of your bandwidth for the network and in turn you get this token.. what do you think about this?</p>
<p>Where are the differences in the approaches?</p>
<p><strong>CH</strong>: I think it's a valuable approach. In a common space we should start out from the point that people invested in the ?? to get the social dilemma to a sustainable point. People who really draw a lot of the bandwidth you can start looking at that, and then you get back to the firewall.. a library notices a person requesting hundreds of gb in a few hours they can block the IP.</p>

<p><strong>HS</strong>: This setup requires a private/public key, you don't want that to be just on one computer cause you're going to use more than one computer. You have to move the private keys around in order to continue editing.</p>
<p><strong>CH</strong>: You can have one private key for your personal key, one for your mobile, that all have access to the same profile - multi-writer.</p>
                </div>
              </section>


              <section id="recommender-systems" rel="schema:hasPart" resource="#recommender-systems">
                <h3 property="schema:name">12:00 — 12:15: Recommender Systems as Enabling Technology to Interlink Scholarly Information, Elisabeth Lex</h3>
                <div datatype="rdf:HTML" property="schema:description">
<p>Our idea is to use recommender systems to link scholarly information. There is a lot of content out there, lots of great open access content. The EU commission is really focussing on making the outputs of projects as open as possible. Data about publications, about scholars, projects. You're probably aware of FAIR.. all these aspects are very important. We're focussing on increasing findability of scientific outputs. Great potential to spark scientific collaborations.</p>
<p>OpenAIRE project, started in 2009, the intention to support researchers on EU projects in making their stuff open access. Guidelines and infrastructure. They have a portal where you can put your publications. It's growing now. The idea is to have this project as an open science infrastructure, integrated in the EU open science pilot.</p>
<p>All the technology of OpenAIRE is cc-by. What's interesting for us is the different types of data in there. High level high quality metadata for projects. Certain applications to search, some visualisations.</p>
<p>We proposed to them a recommender services that can be easily integrated into the portal. Should spark scientific collaboration. We want to achieve linking of scholarly communication through contextualisation.</p>
<p>If I were to submit a proposal to the EU commission maybe I can find a partner. This is really hard to extract. This is just one use case. Also peer review, suggesting people as candidates for reviewing articles.</p>
<p>Currently it's scientific collaborators.</p>
<p>We crawled the OpenAIRE API. It's not like there's daily new information, updated every 3 months. 24 mil open access publications in it, nice dataset. Data about institutions, research outputs, funders.</p>
<p>We wanted to help researchers in finding institutions that work on specific topics. Find out who works on shared projects in the past.</p>
<p>Our approach was an open source recommender framework ScaR, uses open source components. We put this crawl of OpenAIRE indexed in our recommender framework. Implemented some algorithms - keyword based filtering, unpersonalised. Collaborative based filtering so you can find organisations that have worked on A have also worked on B. Content-based filtering.</p>
<p>We already found some issues with the metadata in OpenAIRE.</p>
<p>Quick demo, preliminary interface. If I search for open science I retrieve a number of universities which work on that.</p>
<p>First issues - metadata has some troubles. Differences in keywords, typos. The recommender can only work as good as the metadata.</p>
<p>You could see if we take the ID from UCL and see who they have collaborated.</p>
<p>What we are doing is we will create a lookup for the IDs so you don't have to put in the hash. And providing explanations for the recommendations.</p>
<p>We have a Swagger interface to the API publicly available if you want to play.</p>
<p>Basically what we have found is that a lot of stuff needs to be done in order to make a good recommender system on that. Our idea is to increase the quality of metadata. To support the Open AIRE people in these tasks.</p>
<p>First step is to try to have users connect scholarly communication. To support contextualisation of research outputs.</p>
<p>Our service can also be easily integrated in other platforms - a few lines of JavaScript. Can work with other content repositories.</p>
<p>Also looking into recommending people, experts.</p>
<p>Thanks to my collaborators!</p>
<p><a href="http://openuphub.eu/community/blog/item/ecommender-systems-as-enabling-technology-to-interlink-scholarly-information-2">http://openuphub.eu/community/blog/item/ecommender-systems-as-enabling-technology-to-interlink-scholarly-information-2</a></p>

<p>Q&amp;A:</p>

<p><strong>CH</strong>: How many links there are?</p>
<p><strong>EL</strong>: The collaborative filtering approach does not work that well because a lot of university names are written differently so it thinks they are different. And a lot of projects annotated as only one institution working on it. There could be way more links in the data.</p>
<p><strong>??</strong>: Have you ever tried to use the ?? services as the API? I'll talk to you later.</p>
<p><strong>EL</strong>: Currently not, we should talk.</p>
<p><strong>??</strong>: Do you know the ?? EU project, trying to give information about all the outputs of internet related projects? But actually they just started.</p>
<p><strong>EL</strong>: this is a very rich resource of information which is currently just kept somehwere. you could not really benefit form it. It's so competitive to run .. we should connect even more information. Open science is now a priority with the EU commission. They give a lot of public funding to scientists, so they want to make it more accessible to the general public.  A great way to spread the truth of science and move forward.</p>

<p><strong>??</strong>: Tomorrow she's going to be in an interesting panel, international project tracks.</p>

                </div>
              </section>



              <section id="contributive-research" rel="schema:hasPart" resource="#contributive-research">
                <h3 property="schema:name">12:05 — 12:20: Contributive Research: Hypothes.is Implementation for Academic research Purpose, Giacomo Gilmozzi</h3>
                <div datatype="rdf:HTML" property="schema:description">
<p><strong>GG</strong>: The philosopher takes a step back before starting to speak about something. It seems like we spoke a lot about the publication of articles and dissemination on the Web. I'm working at IRI, directed by Bernard Stiegler, who is a philosopher interested in techniques. We explores the field of digital studies, in the sense of a new « organology of knowledge » appearing with the digital, which requires specific studies and concepts, and which shifts the whole contemporary episteme. More precisely -> we investigates the field of cultural and cognitive  technologies from a digital humanities point of view. Furthermore, we participate in the development of new devices and technologies to facilitate contributions and collaborative critique; to provide solutions for editorial and social interaction in the domains of culture and knowledge. Investigate the field of cultural and cognitive technologies from a digital humanities point of view.</p>
<p>Develop applications to facilitate the critique.</p>
<p>The tools we developed cover 3 different types of media. A space and a tool for improving the knowledge building process, and the sharing process.</p>
<p>1. Video annotation.</p>
<p>Ligne de Temps, timeline, usable via Twitter. We have a streaming video and we can use Twitter to contribute and take annotations online simultaneously. We can do the same thing with Polemic Tweet even when the video is not recorded, we can use the time on Twitter to put all the annotations on the video once the video is on the web. It's also usable with offline annotator IRI Notes and with Renkan, mapping using images and links.</p>
<p>2. Images annotation</p>
<p>IconoLabl which is the follow up of the JocondeLab (with Inria). Contributive platform where contributors have access to different images from museums and help to index that, putting keywords, developing a shared knowledge.</p>
<p>3. Text annotation</p>
<p>We're based on the hypothesis project, open source software, giving users a conversation layer over the entire web without the need of any underlying software.</p>
<p>This is what it looks like on TheWebConf webpage. This is a normal webpage, if you open it with the hypothesis URL you have this banner on the right hand side. Basically annotating and sharing with public or with groups. I found someone that annotated it already. So I added another annotation and of course this is not meant to be used with normal websites but with academic persons reading articles on the net to share common knowledge.</p>
<p>On top of basic features we started to implement other functions. Meta categories, important keyword, commentary, trouble, with different colours.</p>
<p>You can see annotations with metacategories so people who start to look at that can understand what are we talking about. Maybe human rights consideration is one important word so it's a keyword.</p>
<p>In our experience annotating text which are using different projects which are easy to understand and quicker to read, this can speed up the research process thanks to the contribution of a given group.</p>
<p>Very useful in practice.</p>
<p>Other categories have been added. 'Action', or 'need expertise' call all the researchers to work on the same file.</p>
<p>User can look through group annotation thanks to this dashboard. You can filter the annotation made by a single contributor of to a single group, and also filter them by the metacategory.</p>
<p>We developed also a Net Rights glossary with an EU funded project. Concerning the automatic editing of the data collected through annotations. This glossary constitutes all the annotation categories as keywords. Accessible to all the group members, and creates a shared vocabulary from the group. Supports multiple keyword definition. Contributors names are always visible. Statistic charts are built automatically to explain which categories are recorded.</p>
<p>Also developing a discussion forum. In this forum contributors will have the possibility to discuss relevance of different definitions and engage with controversies.</p>
<p>Another function which is being developed is the automatic editorialization and publication of abstract in a predetermined format with data collected via annotations, the creation of conceptual map summing up the consensus or the dissensus and also automatic to-do-lists based on the action category (act:expertise, act:meeting, etc.).</p>
<p>The last thing I want to say is we're trying to build this digital tool in a project, a decentralised network for our platform. That can help a local community to engage in this kind of controversies in order to create local shareable knowledge.</p>
<p>Q&amp;A:</p>

<p><strong>HS</strong>: you're using this annotation thing, using the Annotation Protocol from W3C? Does that use LDP?</p>
<p><strong>GG</strong>: Yep</p>
<p><strong>TBL</strong>: no (shakes head)</p>
<p><strong>SC</strong>: I would say no.. they have their own homebaked API, but also a Web Annotation data explosed. To get to it you have to manually add .jsonld to the URL. You can't really machine discover the annotations. They were part of the WA WG but on the implementation side it's not fully implemented.</p>

<p><strong>SC</strong>: Are you using the hypothesis servers for the data?</p>
<p><strong>GG</strong>: No. Local copy.</p>
<p><strong>SC</strong>: Is that information accessible and discoverable by anyone on the web?
GG: Yes. Right now we're using private small groups because of the research aims.</p>
<p><strong>SC</strong>: I think the next interesting thing is that stuff stored on hypothesis and stuff stored with IRI are discoverable using the same mechanism. But really cool.</p>
<p><strong>HS</strong>: In my paper I mention Bernard Stiegler at least 4 times. how do you bring the organs of the state into the web browser. Perhaps you can find someone at IRI who can help...</p>

<p><strong>AG</strong>~ I don't think the rest of this needs to be scribed ~</p>

<p>>>>>> LUNCH :-)</p>
                </div>
              </section>

            </div>
          </section>
        </div>
      </article>
    </main>
<? include '../../end.php'; ?>