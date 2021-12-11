
interface Announcement {
    public void send();
}

class Post implements Announcement {
    @override
    public void send() {
        System.out.println ("Post is sending");
    }
}

class Request implements Announcement {
    @override
    public void send() {
        System.out.println ("Request is sending");
    }
}

class User {
    private Announcement a;
    public Announcement getA() {
        return a;
    }
    public void setA(Announcement a) {
        this.a = a;
    }

    public void startPublish() {
        a.send();
    }
}

public static void main(String[] args) {
    User user = new User();
    user.setA(new Post());
    user.startPublish();
    user.setA(new Request());
    user.startPublish();
}