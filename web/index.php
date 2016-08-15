<h1>Initial Setup and Training</h1>
<p>
    *Note: These files will be replaced. I am learning git and github while composing this guide.
    It will start with the minimum I need to do to get started, then it will make more sense later.
</p>
<ul>
    <li><a href="/">Home</a></li>
    <li><a href="https://git-scm.com/book" target="_blank">Pro Git book</a> - Git is a Distributed Version Control System (DVCS). Pro Git book provides instructions on how to use git.</li>
    <li><a href="http://php-fig.com" target="_blank">PHP Fig</a> - PHP-Fig provides PHP Standards provided by the PHP Framework Interop Group! When a group of developers all uses the same standards and methodologies to write code it provides consistency and makes the code easier for all developers to understand.</li>
    <li><a href="https://github.com" target="_blank">GitHub</a> - GitHub is a code repository that allows multiple developers to collaborate on a project.</li>
    <li><a href="https://gitter.im/" target="_blank">Gitter</a> - This is a Chat Room that can integrate with GitHub to show when a member of your group has taken action on a branch uploaded to GitHub</li>
</ul>
<p>Remember this is quick start for ME only, will make much more sense later.</p>
<h2>Step 1 - Installing Git</h2>
Find a linux operating system with git installed.<br>
Attempted to install on Raspberry Pi running Rasbian. It is already installed.

<h2>Step 2 - Setting up a git repository (using GitHub)</h2>
<p>There are three options. (A) Set-up a local git repository, then add it to GitHub. (B) Set-up a repository on GitHub, then Clone it locally. (C) Fork an existing repository</p>
<p>Please note this portion is incomplete and missing some very vital steps.</p>
<dl>
    <dt>Option A - Local First</dt>
        <dd>Create the directory for you local repository</dd>
        <dd>Type: <code>git init</code></dd>
        <dd>Create an empty repository on GitHub (Do NOT include a ReadMe.MD file</dd>
    <dt>Option B - Remote First</dt>
        <dd>Create a repository on GitHub</dd>
        <dd>cd to the directory above where you would like your Project directory to be. Creating a Clone will automatically create your project folder.</dd>
        <dd>Locally type: <code>git clone git@github.com:user/repository.git</code> - user will be the name of the user who's repository you are cloning from - repository will be the name of the project you are cloning</dd>
    <dt>Option C - Forked</dt>
        <dd>On GitHub, while visiting a code repository belonging to you or another user (usually another user), click "Fork Repository"</dd>
        <dd>While on your new "Forked Repository" click the button for "Clone or download" this will give you the option to download or clone. Additionally if you chose to Clone it will allow you to choose between SSH and HTTPS (This is the link you will copy when setting up your local git)</dd>
</dl>


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
