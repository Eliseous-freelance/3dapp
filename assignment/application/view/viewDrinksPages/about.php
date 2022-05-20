<?php

$background_image_path = "assets/images/homepage/main_2D.jpg";
echo '
<!-- Row to hold 1 card to hold the coca cola descriptive text, etc.-->
<div class="row">
    <!-- Coca Cola Column -->
    <div class="col-sm-12">
        <div class="card" style="border-style: none;" style="background-image: url("' . $background_image_path .'")">
            <div class="card-body" >
                <h3 class="card-title">Coca Cola</h3>
                <p class="card-text">Atlanta Beginners: It was 1886, and in New York Harbour, workers were constructing
                    the
                    Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled.
                    Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple
                    curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done,
                    he
                    carried it a few doors down to Jacobs Pharmacy. Here, the mixture was combined with carbonated
                    water and
                    sampled by customers who all agreed
                    - this new drink was something special.
                    So, Jacobs Pharmacy put it on sale for five cents (about 3p) a glass.</p>
            </div>
        </div>
    </div>
</div>

<p>For contacts information email: <a href="mailto:ed385@sussex.ac.uk">Eliseo Dalle Crode</a></p>
<ul>
    <li>
        30 marks towards the quality of the 3D models: This part of the assignment considers the quality of your Lab 3D
        models from a scene perspective, e.g. is the model illuminated correctly, do you have sufficient camera
        viewpoints, is the geometry optimal and have you applied appropriate materials and textures? Specifically:
    </li>
    <ul>
        <li>
            Efficient geometry for the 3D models.
        </li>
        <li>
            Good use of materials and textures where needed.
        </li>
        <li>
            Appropriate use of lighting models and camera types.
        </li>
    </ul>
</ul>
<ul>
    <li>

        50 marks towards the actual implementation of the assignment as an interactive 3D App exploiting 3D models with
        efficient uses of HTML5, CSS3, X3D, JavaScript, AJAX, JSON, XML, PHP, SQLite and frameworks such as Bootstrap,
        and innovative use of X3DOM as technologies to create a unique Web 3D Application, including use of other
        appropriate media objects (images, video, audio, etc.). The 3D App will be examined for its:
    </li>
    <ul>
        <li>
            [10 Marks] Design quality including usability.
        </li>
        <ul>
            <li>
                Good use of fluid grid layout with HTML and CSS3.
            </li>
            <li>
                Good styling with CSS3.
            </li>
            <li>
                Design of input features, e.g. CSS button styling.
            </li>
            <li>
                Usability.
            </li>
            <li>
                ...
            </li>
        </ul>
    </ul>
    <ul>
        <li>
            [10 Marks] Integration of media including images, audio, video and 3D using X3DOM.
        </li>
        <ul>
            <li>
                Efficient loading of 3D models through a good user interface.
            </li>
            <li>
                Triggering animations, audio, etc. through appropriate interfaces, e.g. buttons, proximity sensor, ...
                on the user interface
            </li>
            <li>
                Appropriate lighting and application of cameras triggered through JavaScript buttons, e.g. turn on/off
                spot light, ... on the user interface
                3D content swapping, i.e. changing of elements of the model (switch to wireframe, change a textures, ...
                ).
            </li>
            <li>
                Description of your 3D objects in the Web 3D Application.
            </li>
            How well is this is integrated in appropriate text boxes (see Lab 8 example).
            ...
        </ul>
    </ul>
    <ul>
        <li>
            [10 Marks] Interaction with the 3D models.
        </li>
        <ul>
            <li>
                Ability to manipulate the 3D model using JavaScript and X3DOM, for example:
            </li>
            <ul>
                <li>
                    Use of cameras to view the 3D model.
                </li>
                <li>
                    Animation features — use of JavaScript to trigger any animation!
                </li>
                <li>
                    ...
                </li>
            </ul>
        </ul>
    </ul>
    <ul>
        <li>
        [20 marks] Implementation of your 3D App with a MVC design pattern.
        </li>
        <ul>
        <li>
        Implementation of a good MVC design pattern exploiting HTML5, CSS3, JavaScript (and/or appropriate Libraries and
        frameworks), AJAX, JSON, PHP (and/or appropriate libraries or frameworks) and SQLite.
        </li>
        </ul>
    </ul>
</ul>
    <ul>

        <li>
            20 marks will be reserved for demonstrating deeper understanding by extending the work beyond the laboratory
            tutorials across any element of your 3D App development. For example, you might make:
        </li>
        <ul>
        <li>
            More complicated 3D models, but don t spend your whole life doing this, you need to balance time against
            marks
        </li>
        <li>
            Marks are also available for using 3D authoring packages, e.g. Maya and Blender that are not taught in the
            labs, and associated workflows
        </li>
        <li>
            Good use of a JavaScript Libraries, e.g. JQuery, JQuery Mobile , etc. beyond Lab 8
        </li>
        <li>
            Good use of PHP libraries, e.g. PDO (PHP Data Objects).
        </li>
        <li>
            Good use of a front-end JavaScript framework, e.g. Bootstrap, AngulaJS ...
        </li>
        <li>
            Going beyond the level of PHP covered in the labs, e.g. Use of a PHP database abstraction layer in the form
            of a lightweight framework, e.g. SLIM (Links to an external site.), and a simple database for the backend.
        </li>
        <li>
            More focus on developing your own simple API for the backend.
        </li>
        <li>
            Clever use of 3D interactions, e.g. sophisticated animations that support the story around the object — not
            simple animations such as rotating the object, that is covered above.
        <li>
            ...
        </li>
        </ul>
</ul>
';
    ?>