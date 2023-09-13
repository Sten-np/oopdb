{extends file="template/layout.tpl"}
{block name="title"}
    GameHub | Contact
{/block}
{block name="footer"}{/block}
{block name="contact-page"}
    <br><div class="jumbotron">
        <h1>Contact and frequently asked question.</h1>
    </div>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    How long does shipping take?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>It usually takes 1-3 work days.</strong> However, do keep in mind that our delivery service doesn't deliver on saturdays and sundays.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    What's the return policy?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    You are eligible for refund if you return the product within 1 week after delivery. The product must be in it's original box. You can report a return on the bottom of this page by filling out the form. It takes a maximum of 3 days to have your money back on your bank account.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    I have a complaint. Where can I file it?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    We are sorry that our service doesn't meet your expectations. You can file your complaint at the bottom of this page by filling out the form.
                </div>
            </div>
        </div>
    </div>

    <br><br><div class="container-fluid">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="question">Your question or complaint</label>
                <textarea class="form-control" name="form-txt" required></textarea>
            </div>
            <br><button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
{/block}