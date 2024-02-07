console.log("hello");
document.addEventListener('DOMContentLoaded', function () {
    var texts = ["Strategic Play", "Precision Passing", "Defensive Mastery"];

    var spanElement = document.querySelector('.text-main div h1 span');

    var counter = 0;

    function updateText() {
        spanElement.textContent = texts[counter];
        counter = (counter + 1) % texts.length;
    }

    setInterval(updateText, 2500);
});



$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 400) {
            $('.navbar').addClass('navbar-scrolled');
        } else {
            $('.navbar').removeClass('navbar-scrolled');
        }
    });
});


function changecontent(item) {
    const contents = {
        overview: `<div class="section">
                        <h3 class="section-title">League Structure</h3>
                        <p class="section-content">Discover the dynamic framework that fuels the Maguire Youth League:</p>
                        <ul>
                            <li>Explore multiple divisions, each with its own storyline and drama.</li>
                            <li>Uncover the rules that shape fair play and sportsmanship.</li>
                            <li>Dive into the overall structure that defines the competitive spirit of our league.</li>
                        </ul>
                    </div>

                    <div class="section">
                        <h3 class="section-title">Age Groups</h3>
                        <p class="section-content">Embark on a journey through the diverse age groups that make our league a vibrant
                            tapestry of talent:</p>
                        <ul>
                            <li>Feel the energy of junior categories as young stars take their first steps on the pitch.</li>
                            <li>Witness the intensity of senior divisions where experience meets raw skill.</li>
                            <li>Experience the evolution of players as they progress through different stages.</li>
                        </ul>
                    </div>

                    <div class="section">
                        <h3 class="section-title">Schedules</h3>
                        <p class="section-content">Stay captivated with the Maguire Youth League schedules, your roadmap to football
                            excitement:</p>
                        <ul>
                            <li>Mark your calendars for thrilling clashes between rival teams.</li>
                            <li>Explore fixture details, match dates, and locations for every heart-pounding encounter.</li>
                            <li>Immerse yourself in the electric atmosphere as talented youth teams vie for victory.</li>
                        </ul>
                    </div>`,
        stats: `<h6 class="home-slider__badge">Top Scorers</h6>
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Team</th>
                                <th>Goals Scored</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Player 1</td>
                                <td>Team A</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>Player 2</td>
                                <td>Team B</td>
                                <td>25</td>
                            </tr>
                            <tr>
                                <td>Player 3</td>
                                <td>Team C</td>
                                <td>23</td>
                            </tr>
                            <tr>
                                <td>Player 4</td>
                                <td>Team D</td>
                                <td>22</td>
                            </tr>
                            <tr>
                                <td>Player 5</td>
                                <td>Team E</td>
                                <td>21</td>
                            </tr>
                        </tbody>
                    </table>
    
                    <h6 class="home-slider__badge">Top Assisters</h6>
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Team</th>
                                <th>Assists Provided</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Player A</td>
                                <td>Team F</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td>Player B</td>
                                <td>Team G</td>
                                <td>13</td>
                            </tr>
                            <tr>
                                <td>Player C</td>
                                <td>Team H</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>Player D</td>
                                <td>Team I</td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <td>Player E</td>
                                <td>Team J</td>
                                <td>10</td>
                            </tr>
                        </tbody>
                    </table>`,
        standings: `<h6 class="home-slider__badge">Football League Table</h6>

                    <table>
                        <thead>
                            <tr>
                                <th class="rank">Rank</th>
                                <th class="team">Team</th>
                                <th class="matches">Matches</th>
                                <th class="points">Points</th>
                                <th class="wins">Wins</th>
                                <th class="draws">Draws</th>
                                <th class="losses">Losses</th>
                                <th class="goals-scored">Goals Scored</th>
                                <th class="goals-conceded">Goals Conceded</th>
                                <th class="goal-difference">Goal Difference</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Team A</td>
                                <td>10</td>
                                <td>27</td>
                                <td>8</td>
                                <td>3</td>
                                <td>1</td>
                                <td>25</td>
                                <td>10</td>
                                <td>+15</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Team B</td>
                                <td>10</td>
                                <td>24</td>
                                <td>7</td>
                                <td>3</td>
                                <td>2</td>
                                <td>20</td>
                                <td>12</td>
                                <td>+8</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Team C</td>
                                <td>10</td>
                                <td>22</td>
                                <td>6</td>
                                <td>4</td>
                                <td>0</td>
                                <td>18</td>
                                <td>8</td>
                                <td>+10</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Team D</td>
                                <td>10</td>
                                <td>20</td>
                                <td>6</td>
                                <td>2</td>
                                <td>2</td>
                                <td>22</td>
                                <td>15</td>
                                <td>+7</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Team E</td>
                                <td>10</td>
                                <td>18</td>
                                <td>5</td>
                                <td>3</td>
                                <td>2</td>
                                <td>17</td>
                                <td>12</td>
                                <td>+5</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Team F</td>
                                <td>10</td>
                                <td>16</td>
                                <td>4</td>
                                <td>4</td>
                                <td>2</td>
                                <td>14</td>
                                <td>10</td>
                                <td>+4</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Team G</td>
                                <td>10</td>
                                <td>14</td>
                                <td>4</td>
                                <td>2</td>
                                <td>4</td>
                                <td>16</td>
                                <td>18</td>
                                <td>-2</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Team H</td>
                                <td>10</td>
                                <td>12</td>
                                <td>3</td>
                                <td>3</td>
                                <td>4</td>
                                <td>13</td>
                                <td>16</td>
                                <td>-3</td>
                            </tr>
                        </tbody>
                    </table>`,
        players: `<div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <img src="./assets/images/p1.jpeg" class="card-img-top" alt="Player 1">
                                <div class="card-body">
                                    <h5 class="card-title">Kobbie Mainoo
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="./assets/images/p2.jpeg" class="card-img-top" alt="Player 2">
                                <div class="card-body">
                                    <h5 class="card-title">Lamine Yamal</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="./assets/images/p3.jpeg" class="card-img-top" alt="Player 3">
                                <div class="card-body">
                                    <h5 class="card-title">Arda Güler</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="./assets/images/p4.jpeg" class="card-img-top" alt="Player 4">
                                <div class="card-body">
                                    <h5 class="card-title">Endrick Dos Santos</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <img src="./assets/images/p5.jpeg" class="card-img-top" alt="Player 4">
                                <div class="card-body">
                                    <h5 class="card-title">Francesco Camarda</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 border round " >
                            <div class="card">
                                <div class="card-body"style="height:200px;width:200px;">
                                    <h5 class="card-title">See more</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    `
    };

    document.querySelector('.league-overview').innerHTML = contents[item];
}
