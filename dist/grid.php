<!doctype html>
<html lang="en">

<?php include "header.php"; ?>

    <div class="grid">
        <div class="col-2_sm-12">
            <nav class="side vertical">
                <ul>
                    <li><a href="#">Basic grid</a></li>
                    <li><a href="#auto-grid">Auto grid</a></li>
                    <li><a href="#bootstrap-grid">Bootstrap grid</a></li>
                    <li><a href="#mixing-grid">Mixing grid</a></li>
                    <li>
                        <a href="#grid-helpers">Grids helpers</a>
                        <nav class="vertical m-l-15">
                            <ul>
                                <li><a href="#grid-no-gutter">grid with no gutters</a></li>
                                <li><a href="#grid-alignment">grid alignment</a></li>
                                <li><a href="#vertical-alignment-top">vertical alignment</a></li>
                                <li><a href="#vertical-alignment-center">vertical alignment center</a></li>
                                <li><a href="#vertical-alignment-bottom">vertical alignment bottom</a></li>
                                <li><a href="#vertical-alignment-mixed">vertical alignment mixed</a></li>
                                <li><a href="#grid-reverse">grid reorder</a></li>
                                <li><a href="#grid-equal">equal height & no gutter</a></li>
                            </ul>
                        </nav>
                    </li>
                    <li><a href="#grid-remove-margin">remove grid margin</a></li>
                    <li><a href="#columns">Columns</a></li>
                    <li><a href="#offset">Offset</a></li>
                    <li><a href="#responsive">Responsive</a></li>
                    <li><a href="#helpers">Helpers</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-10_sm-12">
                <section id="basic-grid">
                    <h2>1. The basic grid</h2>
                    <p>A way to build responsive columns</p>
                    <hr>
                    <p>1 - Add a <code>grid</code> container</p>
                    <p>2 - Add a <code>-*</code> parameters to set the numbers of col</p>
                    <p>3 - Add the same <code>col</code> attributes as the previous parameters</p>

                    <div class="m-20">
                        <div class="grid-4">
                            <div class="col">
                                <div class="demo">
                                    First col
                                </div>
                            </div>
                            <div class="col">
                                <div class="demo">
                                    Second col
                                </div>
                            </div>
                            <div class="col">
                                <div class="demo">
                                    Third col
                                </div>
                            </div>
                            <div class="col">
                                <div class="demo">
                                    Fourth col
                                </div>
                            </div>
                        </div>

                                    <pre class="noPadding"><code class="language-markup"><script type="prism-html-markup"><div class="grid-4">
    <div class="col">
        <div class="demo">
            First col
        </div>
    </div>
    <div class="col">
        <div class="demo">
            Second col
        </div>
    </div>
    <div class="col">
        <div class="demo">
            Third col
        </div>
    </div>
    <div class="col">
        <div class="demo">
            Fourth col
        </div>
    </div>
</div></script></code></pre>
                    </div>

                    <p>What going on if you have more than 4 <code>col</code> ? </p>
                    <hr>

                    <div class="grid-4">
                        <div class="col">
                            <div class="demo">
                                First col
                            </div>
                        </div>
                        <div class="col">
                            <div class="demo">
                                Second col
                            </div>
                        </div>
                        <div class="col">
                            <div class="demo">
                                Third col
                            </div>
                        </div>
                        <div class="col">
                            <div class="demo">
                                Fourth col
                            </div>
                        </div>
                        <div class="col">
                            <div class="demo">
                                Fith col
                            </div>
                        </div>
                        <div class="col">
                            <div class="demo">
                                Six col
                            </div>
                        </div>
                    </div>

                    <pre class="noPadding"><code class="language-markup"><script type="prism-html-markup"><div class="grid-4">
    <div class="col">
        <div class="demo">
            First col
        </div>
    </div>
    <div class="col">
        <div class="demo">
            Second col
        </div>
    </div>
    <div class="col">
        <div class="demo">
            Third col
        </div>
    </div>
    <div class="col">
        <div class="demo">
            Fourth col
        </div>
    </div>
    <div class="col">
        <div class="demo">
            Fourth col
        </div>
    </div>
    <div class="col">
        <div class="demo">
            Fourth col
        </div>
    </div>
</div></script></code></pre>

                </section>

                <section id="auto-grid" class="p-t-50">
                    <h2>2. Auto grid</h2>
                    <p>An automatic grid based on the main container width</p>
                    <hr>

                    <div class="grid">
                        <div class="col">
                            <div class="demo">
                                First column
                            </div>
                        </div>
                        <div class="col">
                            <div class="demo">
                                Second column
                            </div>
                        </div>
                        <div class="col">
                            <div class="demo">
                                Third column
                            </div>
                        </div>
                    </div>

                    <pre class="noPadding"><code class="language-markup"><script type="prism-html-markup"><div class="grid">
    <div class="col">
        <div class="demo">
            First column
        </div>
    </div>
    <div class="col">
        <div class="demo">
            Second column
        </div>
    </div>
    <div class="col">
        <div class="demo">
            Third column
        </div>
    </div>
</div></script></code></pre>
                </section>

                <section id="bootstrap-grid" class="p-t-50">
                    <h2>3. Bootstrap grid</h2>
                    <p>The grid system of Bootstrap is include into zion.css</p>
                    <hr>

                    <p>1 - Add a <code>grid</code> container</p>
                    <p>2 - Add as many <code>col</code> col as you want</p>
                    <p>3 - Add the column size paramaters <code>-*</code></p>
                    <p>IMPORTANT : the grid is based on a <code>12 columns system</code> </p>
                    <br>
                    <div class="grid">
                        <div class="col-12">
                            <div class="demo">
                                col-12
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="demo">
                                col-8
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="demo">
                                col-4
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="demo">
                                col-6
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="demo">
                                col-6
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="demo">
                                col-4
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="demo">
                                col-8
                            </div>
                        </div>
                    </div>

                    <pre class="noPadding"><code class="language-markup"><script type="prism-html-markup"><div class="grid">
    <div class="col-12">
        <div class="demo">
            col-12
        </div>
    </div>
    <div class="col-8">
        <div class="demo">
            col-8
        </div>
    </div>
    <div class="col-4">
        <div class="demo">
            col-4
        </div>
    </div>
    <div class="col-6">
        <div class="demo">
            col-6
        </div>
    </div>
    <div class="col-6">
        <div class="demo">
            col-6
        </div>
    </div>
    <div class="col-4">
        <div class="demo">
            col-4
        </div>
    </div>
    <div class="col-8">
        <div class="demo">
            col-8
        </div>
    </div>
</div></script></code></pre>
    </section>

                <section id="mixing-grid" class="p-t-50">
                <h2>Mixing grid</h2>
                <p>The way to mix the the different grids of zion.css</p>
                <hr>

                <p>1 - Add a <code>grid</code> container</p>
                <p>2 - Add altmost any type of <code>col</code> to the grid !</p>
                <br>
                <div class="grid-4">
                    <div class="col-2"><div class="demo">col-2</div></div>
                    <div class="col-6"><div class="demo">col-6</div></div>
                    <div class="col-1"><div class="demo">col-1</div></div>
                    <div class="col"><div class="demo">col</div></div>

                    <div class="col"><div class="demo">col</div></div>
                    <div class="col"><div class="demo">col</div></div>
                    <div class="col"><div class="demo">col</div></div>
                    <div class="col"><div class="demo">col</div></div>

                    <div class="col-6"><div class="demo">col-6</div></div>
                    <div class="col"><div class="demo">col</div></div>
                    <div class="col"><div class="demo">col</div></div>
                </div>

            <pre class="noPadding"><code class="language-markup"><script type="prism-html-markup"><div class="grid-4">
    <!-- the first row -->
    <div class="col-2">
        <div class="demo">
            col-2
        </div>
     </div>
    <div class="col-6">
        <div class="demo">
            col-6
        </div>
    </div>
    <div class="col-1">
        <div class="demo">
            col-1
        </div>
    </div>
    <div class="col">
        <div class="demo">
            col
        </div>
    </div>

    <!-- the second row -->
    <div class="col">
        <div class="demo">
            col
        </div>
    </div>
    <div class="col">
        <div class="demo">
            col
        </div>
    </div>
    <div class="col">
        <div class="demo">
            col
        </div>
    </div>
    <div class="col">
        <div class="demo">
            col
        </div>
    </div>

    <!-- the third row -->
    <div class="col-6">
        <div class="demo">
            col-6
        </div>
    </div>
    <div class="col">
        <div class="demo">
            col
        </div>
    </div>
    <div class="col">
        <div class="demo">
            col
        </div>
    </div>
</div></script></code></pre>

                </section>

                <section id="grid-helpers" class="p-t-50">
                    <h2>Grids helpers</h2>

                    <section id="grid-no-gutter" class="p-t-30">
                        <h3>Grid with no gutters</h3>
                        <hr>

                        <p>1 - Add the <code>-noGutter</code> attributes</p>
                        <br>
                        <div class="grid-noGutter">
                            <div class="col-12">
                                <div class="demo">
                                    col-12
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="demo">
                                    col-8
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="demo">
                                    col-4
                                </div>
                            </div>
                        </div>

                        <pre class="noPadding"><code class="language-markup"><script type="prism-html-markup"><div class="grid-noGutter">
    <div class="col-12">
        <div class="demo">
            col-12
        </div>
    </div>
    <div class="col-8">
        <div class="demo">
            col-8
        </div>
    </div>
    <div class="col-4">
        <div class="demo">
            col-4
        </div>
    </div>
</div></script></code></pre>

                    </section>

                    <section id="grid-alignment" class="p-t-30">
                        <h3>Grid alignment</h3>
                        <p>The way to align your grid as you want</p>
                        <hr>

                        <p>1 - Add the <code>-alignment parameters</code> attributes after your <code>grid</code></p>
                        <p>2 - Grids are automatically on the left side. But, you can add <code>center</code> and <code>right</code> parameters</p>
                        <br>
                        <div class="grid">
                            <div class="col-4">
                                <div class="demo">
                                    col-4
                                </div>
                            </div>
                        </div>
                        <div class="grid-center">
                            <div class="col-4">
                                <div class="demo">
                                    col-4
                                </div>
                            </div>
                        </div>
                        <div class="grid-right">
                            <div class="col-4">
                                <div class="demo">
                                    col-4
                                </div>
                            </div>
                        </div>

                        <pre class="noPadding"><code class="language-markup"><script type="prism-html-markup"><div class="grid">
    <div class="col-4">
            <div class="demo">
                col-4
            </div>
        </div>
    </div>
<div class="grid-center">
    <div class="col-4">
        <div class="demo">
            col-4
        </div>
    </div>
</div>
<div class="grid-right">
    <div class="col-4">
        <div class="demo">
            col-4
        </div>
    </div>
</div></script></code></pre>

                    </section>

                    <section id="vertical-alignment-top" class="p-t-30">
                        <h3>Vertical alignment</h3>
                        <p>Vertical alignment for your grids</p>
                        <hr>

                        <p>1 - By default, grids are aligns to the <code>top</code></p>
                        <br>

                        <div class="grid">
                            <div class="col-4">
                                <div class="demo">
                                    col-4
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="demo">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut ipsam, iure maxime minus neque omnis quod? Adipisci culpa deserunt doloremque eveniet fugiat iste laborum maxime omnis! A est officia perferendis!
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="demo">
                                    col-4
                                </div>
                            </div>
                        </div>

                        <pre class="noPadding"><code class="language-markup"><script type="prism-html-markup"><div class="grid">
    <div class="col-4">
        <!-- some stuff here -->
    </div>
    <div class="col-4">
        <!-- some stuff here -->
    </div>
    <div class="col-4">
        <!-- some stuff here -->
    </div>
</div></script></code></pre>

                    </section>

                    <section id="vertical-alignment-center" class="p-t-30">
                        <p>2 - You can add the <code>middle</code> parameters to center your grid</p>
                        <br>

                        <div class="grid-middle">
                            <div class="col-4">
                                <div class="demo">
                                    col-4
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="demo">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut ipsam, iure maxime minus neque omnis quod? Adipisci culpa deserunt doloremque eveniet fugiat iste laborum maxime omnis! A est officia perferendis!
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="demo">
                                    col-4
                                </div>
                            </div>
                        </div>

                        <pre class="noPadding"><code class="language-markup"><script type="prism-html-markup"><div class="grid-middle">
    <div class="col-4">
        <!-- some stuff here -->
    </div>
    <div class="col-4">
        <!-- some stuff here -->
    </div>
    <div class="col-4">
        <!-- some stuff here -->
    </div>
</div></script></code></pre>

                    </section>

                    <section id="vertical-alignment-bottom" class="p-t-30">
                        <p>3 - Or the <code>bottom</code> parameters to put your grid to bottom</p>
                        <br>

                        <div class="grid-bottom">
                            <div class="col-4">
                                <div class="demo">
                                    col-4
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="demo">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut ipsam, iure maxime minus neque omnis quod? Adipisci culpa deserunt doloremque eveniet fugiat iste laborum maxime omnis! A est officia perferendis!
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="demo">
                                    col-4
                                </div>
                            </div>
                        </div>

                        <pre class="noPadding"><code class="language-markup"><script type="prism-html-markup"><div class="grid-bottom">
    <div class="col-4">
        <!-- some stuff here -->
    </div>
    <div class="col-4">
        <!-- some stuff here -->
    </div>
    <div class="col-4">
        <!-- some stuff here -->
    </div>
</div></script></code></pre>

                    </section>

                    <section id="vertical-alignment-mixed" class="p-t-30">
                        <h2>Vertical alignment mixed</h2>
                        <p>you can mixed the different ways to align content with the grid</p>
                        <hr>

                        <p>1 - Add the vertical align <code>parameters</code> of your choice to the <code>grid</code></p>
                        <p>2 - You can add a parameter to the <code>col</code> to change their alignment</p>
                        <br>

                        <div class="grid-4-middle">
                            <div class="col">
                                <div class="demo">
                                    col
                                </div>
                            </div>
                            <div class="col">
                                <div class="demo">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores aspernatur, beatae doloribus inventore ipsa, laboriosam libero magnam minima nisi possimus quaerat, quos reiciendis rerum similique suscipit tempora tempore voluptatum.
                                </div>
                            </div>
                            <div class="col-bottom">
                                <div class="demo">
                                    col-bottom
                                </div>
                            </div>
                            <div class="col-top">
                                <div class="demo">
                                    col-top
                                </div>
                            </div>
                        </div>

                        <pre class="noPadding"><code class="language-markup"><script type="prism-html-markup"><div class="grid-4-middle">
    <div class="col">
        <!-- some stuff here -->
    </div>
    <div class="col">
        <!-- some stuff here -->
    </div>
    <div class="col-bottom">
        <!-- some stuff here -->
    </div>
    <div class="col-top">
        <!-- some stuff here -->
    </div>
</div></script></code></pre>

                    </section>

                    <section id="grid-reverse" class="p-t-30">
                        <h2>Grid reorder </h2>
                        <p>you can re-order your the items of your grid</p>
                        <hr>

                        <p>1 - the <code>normal</code> grid</p>
                        <br>

                        <div class="grid">
                            <div class="col"><div class="demo">A</div></div>
                            <div class="col"><div class="demo">B</div></div>
                            <div class="col"><div class="demo">C</div></div>
                            <div class="col"><div class="demo">D</div></div>
                            <div class="col"><div class="demo">E</div></div>
                        </div>

                        <pre class="noPadding"><code class="language-markup"><script type="prism-html-markup"><div class="grid">
    <div class="col">
        <!-- some stuff here -->
    </div>
    <div class="col">
        <!-- some stuff here -->
    </div>
    <div class="col">
        <!-- some stuff here -->
    </div>
    <div class="col">
        <!-- some stuff here -->
    </div>
</div></script></code></pre>

                        <p>2 - the <code>reverse</code> grid</p>
                        <br>

                        <div class="grid-reverse">
                            <div class="col"><div class="demo">A</div></div>
                            <div class="col"><div class="demo">B</div></div>
                            <div class="col"><div class="demo">C</div></div>
                            <div class="col"><div class="demo">D</div></div>
                            <div class="col"><div class="demo">E</div></div>
                        </div>

                        <pre class="noPadding"><code class="language-markup"><script type="prism-html-markup"><div class="grid-reverse">
    <div class="col">
        <!-- some stuff here -->
    </div>
    <div class="col">
        <!-- some stuff here -->
    </div>
    <div class="col">
        <!-- some stuff here -->
    </div>
    <div class="col">
        <!-- some stuff here -->
    </div>
</div></script></code></pre>

                        <p>3 - the normal order with <code>ordering</code> item</p>
                        <br>

                        <div class="grid-5">
                            <div class="col-last"><div class="demo">A</div></div>
                            <div class="col"><div class="demo">B</div></div>
                            <div class="col"><div class="demo">C</div></div>
                            <div class="col"><div class="demo">D</div></div>
                            <div class="col-first"><div class="demo">E</div></div>
                        </div>

                        <pre class="noPadding"><code class="language-markup"><script type="prism-html-markup"><div class="grid-5">
    <div class="col-last">
        <!-- some stuff here -->
    </div>
    <div class="col">
        <!-- some stuff here -->
    </div>
    <div class="col">
        <!-- some stuff here -->
    </div>
    <div class="col-first">
        <!-- some stuff here -->
    </div>
</div></script></code></pre>

                    </section>

                    <section id="grid-equal" class="p-t-30">
                        <h2>Equal height and no gutter</h2>
                        <p>way to disable gutters and add an equal height property</p>
                        <hr>

                        <p>1 - Create the <code>grid</code> you want to display</p>
                        <p>2 - You can add <code>equalHeight</code> parameters to create equalHeight columns</p>
                        <p>3 - You can add <code>noGutter</code> parameters to remove gutters</p>
                        <br>

                        <div class="grid-equalHeight-noGutter">
                            <div class="col">
                                <div class="demo">
                                    col
                                </div>
                            </div>
                            <div class="col">
                                <div class="demo">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores aspernatur, beatae doloribus inventore ipsa, laboriosam libero magnam minima nisi possimus quaerat, quos reiciendis rerum similique suscipit tempora tempore voluptatum.
                                </div>
                            </div>
                            <div class="col">
                                <div class="demo">
                                    col-bottom
                                </div>
                            </div>
                            <div class="col">
                                <div class="demo">
                                    col-top
                                </div>
                            </div>
                        </div>

                        <pre class="noPadding"><code class="language-markup"><script type="prism-html-markup"><div class="grid-equalHeight-noGutter">
    <div class="col">
        <!-- some stuff here -->
    </div>
    <div class="col">
        <!-- some stuff here -->
    </div>
    <div class="col">
        <!-- some stuff here -->
    </div>
    <div class="col">
        <!-- some stuff here -->
    </div>
</div></script></code></pre>

                    </section>


                </section>

                 <section id="grid-remove-margin" class="p-t-50">

                <h2>To remove all vertical margins?</h2>
                <p>create a perfect gallery</p>
                <hr>

                <p>1 - add <code>-noBottom</code> and <code>-noGutter</code> to your grid</p>
                <br>
                <div class="grid-6-noGutter-noBottom">
                    <div class="col">
                        <div class="demo-img">
                            <img src="https://unsplash.it/500?image=1" width="220" height="220" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="demo-img">
                            <img src="https://unsplash.it/500?image=2" width="220" height="220" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="demo-img">
                            <img src="https://unsplash.it/500?image=3" width="220" height="220" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="demo-img">
                            <img src="https://unsplash.it/500?image=4" width="220" height="220" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="demo-img">
                            <img src="https://unsplash.it/500?image=5" width="220" height="220" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="demo-img">
                            <img src="https://unsplash.it/500?image=6" width="220" height="220" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="demo-img">
                            <img src="https://unsplash.it/500?image=7" width="220" height="220" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="demo-img">
                            <img src="https://unsplash.it/500?image=8" width="220" height="220" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="demo-img">
                            <img src="https://unsplash.it/500?image=9" width="220" height="220" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="demo-img">
                            <img src="https://unsplash.it/500?image=10" width="220" height="220" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="demo-img">
                            <img src="https://unsplash.it/500?image=11" width="220" height="220" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="demo-img">
                            <img src="https://unsplash.it/500?image=12" width="220" height="220" alt="">
                        </div>
                    </div>
                </div>

            </section>

            <section id="distribution" class="p-t-50">
                <h2>Distribution</h2>
                <p>If you add <code>spaceBetween</code> class, the distribution will have no margin around first and
                    last elements :</p>
                <br>
                <div class="grid-spaceBetween">
                    <div class="col-2">
                        <div class="demo">
                            col-2
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="demo">
                            col-2
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="demo">
                            col-2
                        </div>
                    </div>
                </div>

                                        <pre class="noPadding"><code class="language-markup"><script type="prism-html-markup"><div class="grid-spaceBetween">
    <div class="col">
        <!-- some stuff here -->
    </div>
    <div class="col">
        <!-- some stuff here -->
    </div>
    <div class="col">
        <!-- some stuff here -->
    </div>
    <div class="col">
        <!-- some stuff here -->
    </div>
</div></script></code></pre>



                <p>If you add <code>grid-spaceAround</code> class, you get margins around first and last element</p>
                <br>
                <div class="grid-spaceAround">
                    <div class="col-2">
                        <div class="demo">
                            col-2
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="demo">
                            col-2
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="demo">
                            col-2
                        </div>
                    </div>
                </div>

                <p>If you add <code>grid-center</code> class, your items are center in the grid div</p>
                <div class="grid-center">
                    <div class="col-2">
                        <div class="demo">
                            col-2
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="demo">
                            col-2
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="demo">
                            col-2
                        </div>
                    </div>
                </div>
            </section>

            <section id="columns" class="p-t-50">
                <h2>Columns</h2>
                <p>Instead of creating horizontal grid, you can create vertical grid</p>
                <hr>
                <div class="grid-2_md-1">
                    <div class="col">
                        <p>classic column <code>grid-column</code></p>
                        <br>
                        <div class="grid-column">
                            <div class="col-4">
                                <div class="demo">
                                    <p>A</p>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="demo">
                                    <p>B</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="demo">
                                    <p>C</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <p>reverse column <code>grid-column-reverse</code></p>
                        <br>
                        <div class="grid-column-reverse">
                            <div class="col-4">
                                <div class="demo">
                                    <p>A</p>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="demo">
                                    <p>B</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="demo">
                                    <p>C</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>

            <section id="offset" class="p-t-50">
                <h2>Offset</h2>
                <p>the way to push your columns</p>
                <hr>

                <p>1 - Create the <code>grid</code> container you want to display</p>
                <p>2 - Add the <code>data-push-left</code> or <code>data-push-right</code> attributes</p>
                <p>3 - Add the <code>off-*</code> attributes to push your item</p>

                <div class="grid">
                    <div class="col-6" data-push-left="off-6">
                        <div class="demo">
                            col-6 data-push-left="off-6"
                        </div>
                    </div>
                </div>

                <pre class="noPadding"><code class="language-markup"><script type="prism-html-markup"><div class="grid">
    <div class="col-6" data-push-left="off-6">
        <div class="demo">
            col-6 data-push-left="off-6"
        </div>
    </div>
</div></script></code></pre>

                <p>4 - another example</p>

                <div class="grid">
                    <div class="col-4">
                        <div class="demo">
                            col-4
                        </div>
                    </div>
                    <div class="col-4" data-push-left="off-4">
                        <div class="demo">
                            col-4 data-push-left="off-4"
                        </div>
                    </div>
                </div>

                <pre class="noPadding"><code class="language-markup"><script type="prism-html-markup"><div class="grid">
    <div class="col-4">
        <div class="demo">
            col-4
        </div>
    </div>
    <div class="col-4" data-push-left="off-4">
        <div class="demo">
            col-4 data-push-left="off-4"
        </div>
    </div>
</div></script></code></pre>



            </section>

            <section id="responsive" class="p-t-50">
                <h2>Responsive</h2>
                <p>Method to create responsive grid</p>
                <hr>

                <p>1 - Try the <code>responsive</code> !</p>
                <br>

                <div class="grid_lg-4_md-3_sm-2_xs-1">
                    <div class="col">
                        <div class="demo">col</div>
                    </div>
                    <div class="col">
                        <div class="demo">col</div>
                    </div>
                    <div class="col">
                        <div class="demo">col</div>
                    </div>
                    <div class="col">
                        <div class="demo">col</div>
                    </div>
                    <div class="col">
                        <div class="demo">col</div>
                    </div>
                    <div class="col">
                        <div class="demo">col</div>
                    </div>
                </div>

                <pre class="noPadding"><code class="language-markup"><script type="prism-html-markup"><div class="grid_lg-4_md-3_sm-2_xs-1">
    <div class="col">
        <!-- some stuff here -->
    </div>
    <div class="col">
        <!-- some stuff here -->
    </div>
    <div class="col">
        <!-- some stuff here -->
    </div>
    <div class="col">
        <!-- some stuff here -->
    </div>
</div></script></code></pre>


                <p>2 - put these class to create <code>responsive grid</code></p>
                <br>
                <div class="demo txtLeft">
                        col-lg : <code>breakpoint : 1280px</code><br>
                        col-md : <code>breakpoint : 1024px</code><br>
                        col-sm : <code>breakpoint : 768px</code><br>
                        col-xs : <code>breakpoint : 568px</code>
                </div>

                <br>
                <p>3 - you can change these values into the <code>_z-variables.scss</code> file</p>
            </section>

            <div id="helpers" class="p-t-50">
                <h2>Helpers</h2>
                <p>a list of class that you can use</p>
                <hr>

                <p><code>Fix</code> an item</p>
                <br>
                <div class="demo">
                    <code>.z-fixed</code>
                </div>
                <br>
                <p class="p-t-50">remove <code>padding</code> and <code>margin</code></p>
                <br>
                <div class="demo">
                    <code>.noPadding</code>
                    <code>.noMargin</code>
                </div>
                <br>
                <p class="p-t-50">align <code>items</code></p>
                <br>
                <div class="demo">
                    <code>.txtLeft</code>
                    <code>.txtCenter</code>
                    <code>.txtRight</code>
                </div>
                <br>
                <p class="p-t-50">the way to center element <code>vertically</code> into one div</p>
                <br>
                <p>1 - add the <code>v-align-center</code> attributes to your element</p>
                <br>
                <div class="grid-equalHeight">
                    <div class="col">
                        <div class="demo v-align-center txtCenter">
                            test
                        </div>
                    </div>
                    <div class="col">
                        <div class="demo">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae facere minus praesentium reprehenderit! Aliquid animi distinctio dolore enim, eveniet ex hic magni nobis odit, reiciendis repellat veniam. Minus, officia quae?
                        </div>
                    </div>
                </div>

                <pre class="noPadding"><code class="language-markup"><script type="prism-html-markup"><div class="grid">
    <div class="col">
        <div class="demo v-align-center">
            <!-- some stuff here -->
        </div>
    </div>
    <div class="col">
        <div class="demo">
            <!-- some stuff here -->
        </div>
    </div>
</div></script></code></pre>
                <br>
                <p>2 - you can also add the <code>v-align-top</code> attributes to put element to the top</p>
                <br>
                <div class="grid-equalHeight">
                    <div class="col">
                        <div class="demo v-align-top txtCenter">
                            test
                        </div>
                    </div>
                    <div class="col">
                        <div class="demo">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae facere minus praesentium reprehenderit! Aliquid animi distinctio dolore enim, eveniet ex hic magni nobis odit, reiciendis repellat veniam. Minus, officia quae?
                        </div>
                    </div>
                </div>
                <br>

                <p>3 - or the <code>v-align-bottom</code> attributes to put element to the bottom</p>
                <br>
                <div class="grid-equalHeight">
                    <div class="col">
                        <div class="demo v-align-bottom txtCenter">
                            test
                        </div>
                    </div>
                    <div class="col">
                        <div class="demo">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae facere minus praesentium reprehenderit! Aliquid animi distinctio dolore enim, eveniet ex hic magni nobis odit, reiciendis repellat veniam. Minus, officia quae?
                        </div>
                    </div>
                </div>
                <br>

                <p class="p-t-50">change the <code>font-size</code></p>
                <br>
                <p>1 - you can change the font-size of an item with the <code>fs-*</code> attributes</p>
                <p>2 - the <code>*</code> attributes have to be a value between 0 to 50 px</p>
                <p>3 - you can edit the unit of the <code>fs-</code> attributes in the <code>_z-helpers.scss</code></p>
                <br>
                <div class="demo">
                    <p class="fs-10">.fs-10</p>
                    <p class="fs-20">.fs-20</p>
                    <p class="fs-30">.fs-30</p>
                </div>
                <br>

                <p class="p-t-50">change the <code>padding</code></p>
                <br>
                <p>1 - you can change the padding of an item with the <code>p-*</code> attributes</p>
                <p>2 - the <code>*</code> attributes have to be a value between 0 to 50 px</p>
                <p>3 - you can edit the unit of the <code>p-*</code> attributes in the <code>_z-helpers.scss</code></p>
                <br>
                <div class="demo">
                    <p class="fs-10">.fs-10</p>
                    <p class="fs-20">.fs-20</p>
                    <p class="fs-30">.fs-30</p>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="assets/js/main.min.js"></script>

</body>
</html>