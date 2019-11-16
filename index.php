<html lang="en">
    <head>
        <title>Stonks</title>

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <!-- <nav>
            <div class="blue nav-wrapper">
                <a href="#" class="brand-logo center">Stonks</a>
            </div>
        </nav> -->

        <div class="container">
            <div class="card-panel">
                <img src="media/stonks.png" style="display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;">
                <h3 style="al"><a href="https://github.com/schlatt-co/stonks">Github repo</a></h3>
                <h4>Companies and Accounts</h4>
                Companies store money in accounts.<br>
                To use a company, you need to make an account. An account will store money independant of any player.<br>
                Anyone can pay into an account, but only some people can withdraw money from them.<br>
                There are two types of accounts:
                <br><br>
                <h5>1. Company Accounts</h5>
                This is simply a balance that is stored in the company. Anyone can pay into these, however only members of the company with management roles (CEO, Managers) can withdraw money from them.<br>
                <b>You would use this to store and share money with a group of people.</b>
                <br><br>
                Note: if you put money into a company account someone else in the company could take it out and you may not be able to redeem it.
                <br><br>
                - Making company accounts:<br>
                <code>/stonks createaccount &lt;company_name&gt; &lt;account_name&gt;    (note: there is a creation fee of $1000)</code>
                <br><br>
                - Paying into company accounts:<br>
                <code>/stonks pay &lt;amount&gt;</code>
                <br><br>
                - Withdrawing from company accounts:<br>
                <code>/stonks withdraw &lt;amount&gt;</code>
                <br><br><br>
                <h5>2. Holdings Accounts</h5>
                These are accounts that are split proportionally between multiple players. A holdings account consists of a number of holdings.
                <br><br>
                A holding is a balance and a "proportion number" owned by a player.<br>
                When money is paid into a holdings account, it is split proportionally between all holdings<br>
                The formula for splitting payments is:  Money for holding = Total paid in * (Proportion / Sum of all proportions)
                <br><br>
                Since a holding belongs to only one player, only they can withdraw money from that holding. This means holdings accounts can only be paid into, and can't be used for SELL signs. Moreover, money in your holding cannot be accessed by other members of your company.<br>
                A player can have a maximum of one holding per holdings account.<br>
                There is no limit to the number of holdings in a holdings account.
                <br><br><br>
                Example:<br>
                Holding 1 [Tsarcasm, $0, Proportion=1]<br>
                Holding 2 [Tycho, $0, Proportion=3]
                <br><br>
                If $100 is paid into the holdings account, it is split. The end result is<br>
                Holding 1 [Tsarcasm, $25, Proportion=1]   (100 * 1/4 = 25)<br>
                Holding 2 [Tycho, $75, Proportion=3]      (100 * 3/4 = 75)
                <br><br>
                If every holding has the same proportion then the money is split equally.<br>
                <b>You would use a holdings account to split revenue from shops between multiple players</b>
                <br><br><br>
                - Making holdings accounts:<br>
                <code>/stonks createaccount &lt;company_name&gt; &lt;account_name&gt;    (note: there is a creation fee of $1000)</code>
                <br><br>
                - Paying into holdings accounts:<br>
                <code>/stonks pay &lt;amount&gt;</code>
                <br><br>
                - Creating a holding:<br>
                <code>/stonks createholding &lt;player_name&gt; &lt;share (aka proportion)&gt;</code>
                <br><br>
                - Withdrawing from a holding: (note this will only withdraw from your holding)<br>
                <code>/stonks withdraw &lt;amount&gt;</code>
                <br><br>
                - Removing a player's holding: (note you can only do this when the balance of the holding &lt; $1)<br>
                <code>/stonks removeholding &lt;account_id&gt; &lt;player_name&gt;</code>
            </div>
            <ul class="collection with-header z-depth-2">
                <li class="collection-header"><h4>Commands</h4></li>
                <li class="collection-item">
                    <div>
                        <h6>/stonks</h6>
                        <div class="divider"></div>
                        This will open up a list with all companies, through here you can select a company, see info about companies and change their settings.
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        <h6>/stonks create &lt;company&gt;</h6>
                        <div class="divider"></div>
                        This will create a new company with the specified name. There will be a fee, do "/stonks fees" to see the fee.
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        <h6>/stonks createaccount &lt;account_name&gt;</h6>
                        <div class="divider"></div>
                        This will create an account with specified name, and open a GUI to select the type and the company it should belong to. There will be a fee, do "/stonks fees" to see the fee.
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        <h6>/stonks createholding &lt;player&gt; &lt;ratio&gt;</h6>
                        <div class="divider"></div>
                        This will create a holding and add it to an account chosen via GUI.
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        <h6>/stonks fees</h6>
                        <div class="divider"></div>
                        This will show you the fees for performing certain actions.
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        <h6>/stonks pay &lt;amount&gt;</h6>
                        <div class="divider"></div>
                        This will deposit the specified amount into an account chosen via GUI.
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        <h6>/stonks withdraw &lt;amount&gt;</h6>
                        <div class="divider"></div>
                        This will withdraw the specified amount from the account, if it's a companyaccount you'll only be able to withdraw if you're a manager or CEO and if it's a holdingsaccount it'll withdraw from your holding automatically.
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        <h6>/stonks invite &lt;player&gt; &lt;company&gt;</h6>
                        <div class="divider"></div>
                        This will send an invite to join the specified company to the specified player. (only if you're a manager or higher of the company)
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        <h6>/stonks invites</h6>
                        <div class="divider"></div>
                        This will open up a list with all invites sent to you. You can also accept or decline them through here.
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        <h6>/stonks setlogo &lt;company&gt;</h6>
                        <div class="divider"></div>
                        This will set the company logo to the item type in your hand. (It won't take the item from you)
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        <h6>/stonks top</h6>
                        <div class="divider"></div>
                        This will list the top 10 companies by total value.
                    </div>
                </li>
            </ul>
            <div class="card-panel z-depth-2">
                <h4>Chestshops</h4>
                You can create chestshops which use the balance from a account instead of your own balance. This is useful for stuff like shops you share with other players, keeping certain money seperate and a bunch of other stuff. Here you can see how to set one up.
                <div class="row">
                    <div class="col l6 offset-l3 s12">
                        <img class="responsive-img" src="media/1.png"><br><br>
                        <img class="responsive-img" src="media/2.png"><br><br>
                        <img class="responsive-img" src="media/3.png"><br><br>
                        <img class="responsive-img" src="media/4.png"><br><br>
                    </div>
                </div>
            </div>
        </div>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>