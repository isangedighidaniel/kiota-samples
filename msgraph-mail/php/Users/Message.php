<?php

namespace Microsoft\Graph\Users;

use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Psr\Http\Message\StreamInterface;

class Message extends OutlookItem 
{
    /** @var Attachment $attachments The fileAttachment and itemAttachment attachments for the message. */
    private Attachment $attachments;
    
    /** @var Recipient $bccRecipients The Bcc: recipients for the message. */
    private Recipient $bccRecipients;
    
    /** @var ItemBody $body  */
    private ItemBody $body;
    
    /** @var string $bodyPreview The first 255 characters of the message body. It is in text format. If the message contains instances of mention, this property would contain a concatenation of these mentions as well. */
    private string $bodyPreview;
    
    /** @var Recipient $ccRecipients The Cc: recipients for the message. */
    private Recipient $ccRecipients;
    
    /** @var string $conversationId The ID of the conversation the email belongs to. */
    private string $conversationId;
    
    /** @var Binary $conversationIndex Indicates the position of the message within the conversation. */
    private Binary $conversationIndex;
    
    /** @var Extension $extensions The collection of open extensions defined for the message. Nullable. */
    private Extension $extensions;
    
    /** @var FollowupFlag $flag  */
    private FollowupFlag $flag;
    
    /** @var Recipient $from  */
    private Recipient $from;
    
    /** @var bool $hasAttachments Indicates whether the message has attachments. This property doesn't include inline attachments, so if a message contains only inline attachments, this property is false. To verify the existence of inline attachments, parse the body property to look for a src attribute, such as <IMG src='cid:image001.jpg@01D26CD8.6C05F070'>. */
    private bool $hasAttachments;
    
    /** @var Importance $importance  */
    private Importance $importance;
    
    /** @var InferenceClassificationType $inferenceClassification  */
    private InferenceClassificationType $inferenceClassification;
    
    /** @var InternetMessageHeader $internetMessageHeaders A collection of message headers defined by RFC5322. The set includes message headers indicating the network path taken by a message from the sender to the recipient. It can also contain custom message headers that hold app data for the message.  Returned only on applying a $select query option. Read-only. */
    private InternetMessageHeader $internetMessageHeaders;
    
    /** @var string $internetMessageId The message ID in the format specified by RFC2822. */
    private string $internetMessageId;
    
    /** @var bool $isDeliveryReceiptRequested Indicates whether a read receipt is requested for the message. */
    private bool $isDeliveryReceiptRequested;
    
    /** @var bool $isDraft Indicates whether the message is a draft. A message is a draft if it hasn't been sent yet. */
    private bool $isDraft;
    
    /** @var bool $isRead Indicates whether the message has been read. */
    private bool $isRead;
    
    /** @var bool $isReadReceiptRequested Indicates whether a read receipt is requested for the message. */
    private bool $isReadReceiptRequested;
    
    /** @var MultiValueLegacyExtendedProperty $multiValueExtendedProperties The collection of multi-value extended properties defined for the message. Nullable. */
    private MultiValueLegacyExtendedProperty $multiValueExtendedProperties;
    
    /** @var string $parentFolderId The unique identifier for the message's parent mailFolder. */
    private string $parentFolderId;
    
    /** @var DateTimeOffset $receivedDateTime The date and time the message was received.  The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    private DateTimeOffset $receivedDateTime;
    
    /** @var Recipient $replyTo The email addresses to use when replying. */
    private Recipient $replyTo;
    
    /** @var Recipient $sender  */
    private Recipient $sender;
    
    /** @var DateTimeOffset $sentDateTime The date and time the message was sent.  The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    private DateTimeOffset $sentDateTime;
    
    /** @var SingleValueLegacyExtendedProperty $singleValueExtendedProperties The collection of single-value extended properties defined for the message. Nullable. */
    private SingleValueLegacyExtendedProperty $singleValueExtendedProperties;
    
    /** @var string $subject The subject of the message. */
    private string $subject;
    
    /** @var Recipient $toRecipients The To: recipients for the message. */
    private Recipient $toRecipients;
    
    /** @var ItemBody $uniqueBody  */
    private ItemBody $uniqueBody;
    
    /** @var string $webLink The URL to open the message in Outlook on the web.You can append an ispopout argument to the end of the URL to change how the message is displayed. If ispopout is not present or if it is set to 1, then the message is shown in a popout window. If ispopout is set to 0, then the browser will show the message in the Outlook on the web review pane.The message will open in the browser if you are logged in to your mailbox via Outlook on the web. You will be prompted to login if you are not already logged in with the browser.This URL cannot be accessed from within an iFrame. */
    private string $webLink;
    
    /**
     * Gets the attachments property value. The fileAttachment and itemAttachment attachments for the message.
     * @return Attachment|null
    */
    public function getAttachments(): ?Attachment {
        return $this->attachments;
    }

    /**
     * Gets the bccRecipients property value. The Bcc: recipients for the message.
     * @return Recipient|null
    */
    public function getBccRecipients(): ?Recipient {
        return $this->bccRecipients;
    }

    /**
     * Gets the body property value. 
     * @return ItemBody|null
    */
    public function getBody(): ?ItemBody {
        return $this->body;
    }

    /**
     * Gets the bodyPreview property value. The first 255 characters of the message body. It is in text format. If the message contains instances of mention, this property would contain a concatenation of these mentions as well.
     * @return string|null
    */
    public function getBodyPreview(): ?string {
        return $this->bodyPreview;
    }

    /**
     * Gets the ccRecipients property value. The Cc: recipients for the message.
     * @return Recipient|null
    */
    public function getCcRecipients(): ?Recipient {
        return $this->ccRecipients;
    }

    /**
     * Gets the conversationId property value. The ID of the conversation the email belongs to.
     * @return string|null
    */
    public function getConversationId(): ?string {
        return $this->conversationId;
    }

    /**
     * Gets the conversationIndex property value. Indicates the position of the message within the conversation.
     * @return StreamInterface|null
    */
    public function getConversationIndex(): ?StreamInterface {
        return $this->conversationIndex;
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the message. Nullable.
     * @return Extension|null
    */
    public function getExtensions(): ?Extension {
        return $this->extensions;
    }

    /**
     * Gets the flag property value. 
     * @return FollowupFlag|null
    */
    public function getFlag(): ?FollowupFlag {
        return $this->flag;
    }

    /**
     * Gets the from property value. 
     * @return Recipient|null
    */
    public function getFrom(): ?Recipient {
        return $this->from;
    }

    /**
     * Gets the hasAttachments property value. Indicates whether the message has attachments. This property doesn't include inline attachments, so if a message contains only inline attachments, this property is false. To verify the existence of inline attachments, parse the body property to look for a src attribute, such as <IMG src='cid:image001.jpg@01D26CD8.6C05F070'>.
     * @return bool|null
    */
    public function getHasAttachments(): ?bool {
        return $this->hasAttachments;
    }

    /**
     * Gets the importance property value. 
     * @return Importance|null
    */
    public function getImportance(): ?Importance {
        return $this->importance;
    }

    /**
     * Gets the inferenceClassification property value. 
     * @return InferenceClassificationType|null
    */
    public function getInferenceClassification(): ?InferenceClassificationType {
        return $this->inferenceClassification;
    }

    /**
     * Gets the internetMessageHeaders property value. A collection of message headers defined by RFC5322. The set includes message headers indicating the network path taken by a message from the sender to the recipient. It can also contain custom message headers that hold app data for the message.  Returned only on applying a $select query option. Read-only.
     * @return InternetMessageHeader|null
    */
    public function getInternetMessageHeaders(): ?InternetMessageHeader {
        return $this->internetMessageHeaders;
    }

    /**
     * Gets the internetMessageId property value. The message ID in the format specified by RFC2822.
     * @return string|null
    */
    public function getInternetMessageId(): ?string {
        return $this->internetMessageId;
    }

    /**
     * Gets the isDeliveryReceiptRequested property value. Indicates whether a read receipt is requested for the message.
     * @return bool|null
    */
    public function getIsDeliveryReceiptRequested(): ?bool {
        return $this->isDeliveryReceiptRequested;
    }

    /**
     * Gets the isDraft property value. Indicates whether the message is a draft. A message is a draft if it hasn't been sent yet.
     * @return bool|null
    */
    public function getIsDraft(): ?bool {
        return $this->isDraft;
    }

    /**
     * Gets the isRead property value. Indicates whether the message has been read.
     * @return bool|null
    */
    public function getIsRead(): ?bool {
        return $this->isRead;
    }

    /**
     * Gets the isReadReceiptRequested property value. Indicates whether a read receipt is requested for the message.
     * @return bool|null
    */
    public function getIsReadReceiptRequested(): ?bool {
        return $this->isReadReceiptRequested;
    }

    /**
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the message. Nullable.
     * @return MultiValueLegacyExtendedProperty|null
    */
    public function getMultiValueExtendedProperties(): ?MultiValueLegacyExtendedProperty {
        return $this->multiValueExtendedProperties;
    }

    /**
     * Gets the parentFolderId property value. The unique identifier for the message's parent mailFolder.
     * @return string|null
    */
    public function getParentFolderId(): ?string {
        return $this->parentFolderId;
    }

    /**
     * Gets the receivedDateTime property value. The date and time the message was received.  The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTimeOffset|null
    */
    public function getReceivedDateTime(): ?DateTimeOffset {
        return $this->receivedDateTime;
    }

    /**
     * Gets the replyTo property value. The email addresses to use when replying.
     * @return Recipient|null
    */
    public function getReplyTo(): ?Recipient {
        return $this->replyTo;
    }

    /**
     * Gets the sender property value. 
     * @return Recipient|null
    */
    public function getSender(): ?Recipient {
        return $this->sender;
    }

    /**
     * Gets the sentDateTime property value. The date and time the message was sent.  The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTimeOffset|null
    */
    public function getSentDateTime(): ?DateTimeOffset {
        return $this->sentDateTime;
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the message. Nullable.
     * @return SingleValueLegacyExtendedProperty|null
    */
    public function getSingleValueExtendedProperties(): ?SingleValueLegacyExtendedProperty {
        return $this->singleValueExtendedProperties;
    }

    /**
     * Gets the subject property value. The subject of the message.
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Gets the toRecipients property value. The To: recipients for the message.
     * @return Recipient|null
    */
    public function getToRecipients(): ?Recipient {
        return $this->toRecipients;
    }

    /**
     * Gets the uniqueBody property value. 
     * @return ItemBody|null
    */
    public function getUniqueBody(): ?ItemBody {
        return $this->uniqueBody;
    }

    /**
     * Gets the webLink property value. The URL to open the message in Outlook on the web.You can append an ispopout argument to the end of the URL to change how the message is displayed. If ispopout is not present or if it is set to 1, then the message is shown in a popout window. If ispopout is set to 0, then the browser will show the message in the Outlook on the web review pane.The message will open in the browser if you are logged in to your mailbox via Outlook on the web. You will be prompted to login if you are not already logged in with the browser.This URL cannot be accessed from within an iFrame.
     * @return string|null
    */
    public function getWebLink(): ?string {
        return $this->webLink;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        echo('This is the body of the deserializer.');
    }

    /**
     * Serializes information the current object
     * @param ?ISerializationWriter $writer $writer Serialization writer to use to serialize this model
    */
    public function serialize(?ISerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('attachments', $this->attachments);
        $writer->writeCollectionOfObjectValues('bccRecipients', $this->bccRecipients);
        $writer->writeObjectValue('body', $this->body);
        $writer->writeStringValue('bodyPreview', $this->bodyPreview);
        $writer->writeCollectionOfObjectValues('ccRecipients', $this->ccRecipients);
        $writer->writeStringValue('conversationId', $this->conversationId);
        $writer->writeObjectValue('conversationIndex', $this->conversationIndex);
        $writer->writeCollectionOfObjectValues('extensions', $this->extensions);
        $writer->writeObjectValue('flag', $this->flag);
        $writer->writeObjectValue('from', $this->from);
        $writer->writeBooleanValue('hasAttachments', $this->hasAttachments);
        $writer->writeEnumValue('importance', $this->importance);
        $writer->writeEnumValue('inferenceClassification', $this->inferenceClassification);
        $writer->writeCollectionOfObjectValues('internetMessageHeaders', $this->internetMessageHeaders);
        $writer->writeStringValue('internetMessageId', $this->internetMessageId);
        $writer->writeBooleanValue('isDeliveryReceiptRequested', $this->isDeliveryReceiptRequested);
        $writer->writeBooleanValue('isDraft', $this->isDraft);
        $writer->writeBooleanValue('isRead', $this->isRead);
        $writer->writeBooleanValue('isReadReceiptRequested', $this->isReadReceiptRequested);
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->multiValueExtendedProperties);
        $writer->writeStringValue('parentFolderId', $this->parentFolderId);
        $writer->writeObjectValue('receivedDateTime', $this->receivedDateTime);
        $writer->writeCollectionOfObjectValues('replyTo', $this->replyTo);
        $writer->writeObjectValue('sender', $this->sender);
        $writer->writeObjectValue('sentDateTime', $this->sentDateTime);
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->singleValueExtendedProperties);
        $writer->writeStringValue('subject', $this->subject);
        $writer->writeCollectionOfObjectValues('toRecipients', $this->toRecipients);
        $writer->writeObjectValue('uniqueBody', $this->uniqueBody);
        $writer->writeStringValue('webLink', $this->webLink);
    }

    /**
     * Sets the attachments property value. The fileAttachment and itemAttachment attachments for the message.
     *  @param Attachment|null $value Value to set for the attachments property.
    */
    public function setAttachments(Attachment $value): void {
        $this->attachments = $value;
    }

    /**
     * Sets the bccRecipients property value. The Bcc: recipients for the message.
     *  @param Recipient|null $value Value to set for the bccRecipients property.
    */
    public function setBccRecipients(Recipient $value): void {
        $this->bccRecipients = $value;
    }

    /**
     * Sets the body property value. 
     *  @param ItemBody|null $value Value to set for the body property.
    */
    public function setBody(ItemBody $value): void {
        $this->body = $value;
    }

    /**
     * Sets the bodyPreview property value. The first 255 characters of the message body. It is in text format. If the message contains instances of mention, this property would contain a concatenation of these mentions as well.
     *  @param string|null $value Value to set for the bodyPreview property.
    */
    public function setBodyPreview(string $value): void {
        $this->bodyPreview = $value;
    }

    /**
     * Sets the ccRecipients property value. The Cc: recipients for the message.
     *  @param Recipient|null $value Value to set for the ccRecipients property.
    */
    public function setCcRecipients(Recipient $value): void {
        $this->ccRecipients = $value;
    }

    /**
     * Sets the conversationId property value. The ID of the conversation the email belongs to.
     *  @param string|null $value Value to set for the conversationId property.
    */
    public function setConversationId(string $value): void {
        $this->conversationId = $value;
    }

    /**
     * Sets the conversationIndex property value. Indicates the position of the message within the conversation.
     *  @param StreamInterface|null $value Value to set for the conversationIndex property.
    */
    public function setConversationIndex(StreamInterface $value): void {
        $this->conversationIndex = $value;
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the message. Nullable.
     *  @param Extension|null $value Value to set for the extensions property.
    */
    public function setExtensions(Extension $value): void {
        $this->extensions = $value;
    }

    /**
     * Sets the flag property value. 
     *  @param FollowupFlag|null $value Value to set for the flag property.
    */
    public function setFlag(FollowupFlag $value): void {
        $this->flag = $value;
    }

    /**
     * Sets the from property value. 
     *  @param Recipient|null $value Value to set for the from property.
    */
    public function setFrom(Recipient $value): void {
        $this->from = $value;
    }

    /**
     * Sets the hasAttachments property value. Indicates whether the message has attachments. This property doesn't include inline attachments, so if a message contains only inline attachments, this property is false. To verify the existence of inline attachments, parse the body property to look for a src attribute, such as <IMG src='cid:image001.jpg@01D26CD8.6C05F070'>.
     *  @param bool|null $value Value to set for the hasAttachments property.
    */
    public function setHasAttachments(bool $value): void {
        $this->hasAttachments = $value;
    }

    /**
     * Sets the importance property value. 
     *  @param Importance|null $value Value to set for the importance property.
    */
    public function setImportance(Importance $value): void {
        $this->importance = $value;
    }

    /**
     * Sets the inferenceClassification property value. 
     *  @param InferenceClassificationType|null $value Value to set for the inferenceClassification property.
    */
    public function setInferenceClassification(InferenceClassificationType $value): void {
        $this->inferenceClassification = $value;
    }

    /**
     * Sets the internetMessageHeaders property value. A collection of message headers defined by RFC5322. The set includes message headers indicating the network path taken by a message from the sender to the recipient. It can also contain custom message headers that hold app data for the message.  Returned only on applying a $select query option. Read-only.
     *  @param InternetMessageHeader|null $value Value to set for the internetMessageHeaders property.
    */
    public function setInternetMessageHeaders(InternetMessageHeader $value): void {
        $this->internetMessageHeaders = $value;
    }

    /**
     * Sets the internetMessageId property value. The message ID in the format specified by RFC2822.
     *  @param string|null $value Value to set for the internetMessageId property.
    */
    public function setInternetMessageId(string $value): void {
        $this->internetMessageId = $value;
    }

    /**
     * Sets the isDeliveryReceiptRequested property value. Indicates whether a read receipt is requested for the message.
     *  @param bool|null $value Value to set for the isDeliveryReceiptRequested property.
    */
    public function setIsDeliveryReceiptRequested(bool $value): void {
        $this->isDeliveryReceiptRequested = $value;
    }

    /**
     * Sets the isDraft property value. Indicates whether the message is a draft. A message is a draft if it hasn't been sent yet.
     *  @param bool|null $value Value to set for the isDraft property.
    */
    public function setIsDraft(bool $value): void {
        $this->isDraft = $value;
    }

    /**
     * Sets the isRead property value. Indicates whether the message has been read.
     *  @param bool|null $value Value to set for the isRead property.
    */
    public function setIsRead(bool $value): void {
        $this->isRead = $value;
    }

    /**
     * Sets the isReadReceiptRequested property value. Indicates whether a read receipt is requested for the message.
     *  @param bool|null $value Value to set for the isReadReceiptRequested property.
    */
    public function setIsReadReceiptRequested(bool $value): void {
        $this->isReadReceiptRequested = $value;
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the message. Nullable.
     *  @param MultiValueLegacyExtendedProperty|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(MultiValueLegacyExtendedProperty $value): void {
        $this->multiValueExtendedProperties = $value;
    }

    /**
     * Sets the parentFolderId property value. The unique identifier for the message's parent mailFolder.
     *  @param string|null $value Value to set for the parentFolderId property.
    */
    public function setParentFolderId(string $value): void {
        $this->parentFolderId = $value;
    }

    /**
     * Sets the receivedDateTime property value. The date and time the message was received.  The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTimeOffset|null $value Value to set for the receivedDateTime property.
    */
    public function setReceivedDateTime(DateTimeOffset $value): void {
        $this->receivedDateTime = $value;
    }

    /**
     * Sets the replyTo property value. The email addresses to use when replying.
     *  @param Recipient|null $value Value to set for the replyTo property.
    */
    public function setReplyTo(Recipient $value): void {
        $this->replyTo = $value;
    }

    /**
     * Sets the sender property value. 
     *  @param Recipient|null $value Value to set for the sender property.
    */
    public function setSender(Recipient $value): void {
        $this->sender = $value;
    }

    /**
     * Sets the sentDateTime property value. The date and time the message was sent.  The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTimeOffset|null $value Value to set for the sentDateTime property.
    */
    public function setSentDateTime(DateTimeOffset $value): void {
        $this->sentDateTime = $value;
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the message. Nullable.
     *  @param SingleValueLegacyExtendedProperty|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(SingleValueLegacyExtendedProperty $value): void {
        $this->singleValueExtendedProperties = $value;
    }

    /**
     * Sets the subject property value. The subject of the message.
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(string $value): void {
        $this->subject = $value;
    }

    /**
     * Sets the toRecipients property value. The To: recipients for the message.
     *  @param Recipient|null $value Value to set for the toRecipients property.
    */
    public function setToRecipients(Recipient $value): void {
        $this->toRecipients = $value;
    }

    /**
     * Sets the uniqueBody property value. 
     *  @param ItemBody|null $value Value to set for the uniqueBody property.
    */
    public function setUniqueBody(ItemBody $value): void {
        $this->uniqueBody = $value;
    }

    /**
     * Sets the webLink property value. The URL to open the message in Outlook on the web.You can append an ispopout argument to the end of the URL to change how the message is displayed. If ispopout is not present or if it is set to 1, then the message is shown in a popout window. If ispopout is set to 0, then the browser will show the message in the Outlook on the web review pane.The message will open in the browser if you are logged in to your mailbox via Outlook on the web. You will be prompted to login if you are not already logged in with the browser.This URL cannot be accessed from within an iFrame.
     *  @param string|null $value Value to set for the webLink property.
    */
    public function setWebLink(string $value): void {
        $this->webLink = $value;
    }

}
