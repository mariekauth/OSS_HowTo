<h1>Initial Setup and Training</h1>
<p>
    *Note: These files will be replaced. I am learning git and github while composing this guide.
    It will start with the minimum I need to do to get started, then it will make more sense later.
</p>
<ul>
    <li><a href="/">Home</a></li>
    <li><a href="https://git-scm.com/book" target="_blank">Git</a></li>
    <li><a href="http://php-fig.com" target="_blank">PHP Standards</a></li>
    <li><a href="https://gitter.im/brianfreytag/git-chat" target="_blank">Gitter</a></li>
</ul>
<p>Remember this is quick start for ME only, will make much more sense later.</p>
<h2>Step 1</h2>
Find a linux operating system with git installed.<br>
Attempted to install on Raspberry Pi running Rasbian. It is already installed.

<h2>Step 2</h2>
Set up repository on GitHub BEFORE setting it up locally. This helps keep things in sync.

<h3>Step 3</h3>
<ul>
    <li>git init</li>
    <li>loadgithub</li>
    <li>ssh - git clone origin master git@github.com:mariekauth/OSS_HowTo.git</li>
    <li>https - git clone origin master https://github.com/mariekauth/OSS_HowTo.git</li>
    <li>git pull upstream master</li>
    <li>git push upstream master</li>
    <li>git checkout -b in_branchName</li>
    <li>tig status - Does not work if tig is not installed</li>
    <li>git status</li>
    <li>git add fileName - Adds to staging of whatever branch you are on</li>
    <li>git rm fileName - Removes from staging of whatever branch you are on</li>
    <li>git commit - Commits your changes (opens vi for editting)</li>
    <li>git push origin mk_branchName</li>
</ul>
