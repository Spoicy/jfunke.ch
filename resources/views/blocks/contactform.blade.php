<div class="block-contactform">
    <form action="/contact/submit" method="post">
        @csrf
        <div class="row">
            <div class="col">
                <label for="cFirstname">First name</label>
                <input type="text" class="form-control" name="cFirstname" id="cFirstname" placeholder="e.g. John">
            </div>
            <div class="col">
                <label for="cLastname">Last name</label>
                <input type="text" class="form-control" name="cLastname" id="cLastname" placeholder="e.g. Smith">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cEmail">Email address</label>
                <input type="email" class="form-control" name="cEmail" id="cEmail" placeholder="e.g. example@gmail.com">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cSubject">Subject</label>
                <input type="text" class="form-control" name="cSubject" id="cSubject" placeholder="e.g. Inquiry about spoicy.ch">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cMessage">Message/Enquiry</label>
                <textarea class="form-control" name="cMessage" id="cMessage" rows="5"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button class="form-control btn btn-accent mt-1" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>