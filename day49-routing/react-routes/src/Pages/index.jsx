import React from 'react';

export const Home = () => (
  <main>
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti soluta rem, necessitatibus sunt quae architecto odit adipisci inventore, fugit dolorum vero voluptatibus quibusdam non voluptatum exercitationem quod nobis iste numquam corporis qui est dolores mollitia magni. Eveniet architecto, accusamus veritatis totam perspiciatis facere consectetur illum beatae deserunt iste nobis incidunt.</p>
  </main>
);

export const Blog = (props) => (
  <main>
    <h1>Blog {props.match.params.article}</h1>
    <div className="post">
      <h2>Lorem, ipsum dolor.</h2>
    </div>
    <div className="post">
      <h2>Accusamus, harum commodi?</h2>
    </div>
    <div className="post">
      <h2>Sit, doloribus ea!</h2>
    </div>
    <div className="post">
      <h2>Quos, cupiditate ducimus.</h2>
    </div>
    <div className="post">
      <h2>Alias, debitis necessitatibus.</h2>
    </div>
  </main>
);

export const Portfolio = () => (
  <main>
    <h1>Protfolio</h1>
    <ol>
      <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</li>
      <li>Magnam ducimus voluptatum architecto illo dicta odio est?</li>
      <li>Consequuntur, at magni earum exercitationem facere quis ipsa.</li>
      <li>Corporis reiciendis veritatis odit nulla non temporibus recusandae?</li>
      <li>Velit voluptas inventore quos voluptatum perspiciatis ratione dicta.</li>
      <li>Neque modi cum quae saepe quos! Magnam, accusamus.</li>
      <li>Distinctio quas eveniet et laborum odio tempore ipsam!</li>
      <li>Temporibus magnam pariatur recusandae expedita perferendis corporis adipisci.</li>
      <li>Repellat, provident laboriosam. Dicta quod consectetur blanditiis voluptas.</li>
      <li>Molestiae fuga aspernatur quidem quos nobis quibusdam dolorem.</li>
    </ol>
  </main>
);
