from _typeshed import Incomplete

class UserResponse:
    openapi_types: Incomplete
    attribute_map: Incomplete
    discriminator: Incomplete
    def __init__(
        self,
        id: Incomplete | None = None,
        oauth_id: Incomplete | None = None,
        name: Incomplete | None = None,
        status: str = "active",
        links: Incomplete | None = None,
    ) -> None: ...
    @property
    def id(self): ...
    @id.setter
    def id(self, id) -> None: ...
    @property
    def oauth_id(self): ...
    @oauth_id.setter
    def oauth_id(self, oauth_id) -> None: ...
    @property
    def name(self): ...
    @name.setter
    def name(self, name) -> None: ...
    @property
    def status(self): ...
    @status.setter
    def status(self, status) -> None: ...
    @property
    def links(self): ...
    @links.setter
    def links(self, links) -> None: ...
    def to_dict(self): ...
    def to_str(self): ...
    def __eq__(self, other): ...
    def __ne__(self, other): ...